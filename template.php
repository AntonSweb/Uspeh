<?php
/**
 * Override or insert variables for the page templates.
 */
function uspeh_preprocess_html (&$vars) {
  // Add Font Awesome
  // drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('group' => CSS_THEME, 'type' => 'external'));

  // Add Local styles
  drupal_add_css('http://localhost/dev/uspeh/css/style.css', array('group' => CSS_THEME, 'type' => 'external'));
}

/**
 * Add Bootstrap functionality to main menu.
 */
function uspeh_menu_tree__main_menu(&$vars) {
  $output = _bootstrap_link_formatter($vars);
  return $output;
}

/**
 * Provide a bootstrap multilevel menu
 */
function uspeh_menu_link__main_menu(&$variables) {
  $output = _bootstrap_multilevel_menu($variables);
  return $output;
}

/* Helper function for formatting links to bootstrap styles */
function _bootstrap_link_formatter(&$vars){
  $output =
    '<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
					<span class="sr-only"> </span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse">
				<ul class="nav navbar-nav">'. $vars['tree'].'</ul>
			</div>
		</div>
	</nav>';
  return $output;
}

// Helper function to provide a bootstrap multilevel menu
// See for details http://www.drupalgeeks.com/drupal-blog/how-render-bootstrap-sub-menus
function _bootstrap_multilevel_menu($variables) {
  $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
    // Prevent dropdown functions from being added to management menu so it
    // does not affect the navbar module.
    if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    } elseif ((!empty($element['#original_link']['depth'])) && $element['#original_link']['depth'] > 1) {
      // Add our own wrapper.
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
      $element['#attributes']['class'][] = 'dropdown-submenu';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    } else {
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
      $element['#title'] .= ' <span class="caret"></span>';
      $element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;
      $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
      $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }
  }
  // Add active class
  if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
    $element['#attributes']['class'][] = 'active';
  }
  // Add support menu views module
  // https://www.drupal.org/project/menu_views
  if(isset($element['#original_link']['options']['menu_views'])) {
    $view = _menu_views_replace_menu_item($element);
    if ($view !== FALSE) {
      if (!empty($view)) {
        $sub_menu = '';
        $classes = isset($element['#attributes']['class']) ? $element['#attributes']['class'] : array();
        $item = _menu_views_get_item($element);
        foreach (explode(' ', $item['view']['settings']['wrapper_classes']) as $class) {
          if (!in_array($class, $classes)) {
            $classes[] = $class;
          }
        }
        $element['#attributes']['class'] = $classes;
        if ($element['#below']) {
          $sub_menu = drupal_render($element['#below']);
        }
        return '<li' . drupal_attributes($element['#attributes']) . '>' . $view . $sub_menu . "</li>\n";
      }
      return '';
    }
  }
  $element['#attributes']['class'][] = 'mlid-'.$variables['element']['#original_link']['mlid'];
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li ' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}