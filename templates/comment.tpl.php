<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($new): ?>
    <span class="new"><?php print $new ?></span>
  <?php endif; ?>

  <div class="submitted">
    <?php print $submitted; ?>
  </div>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']) ?>
</div>
