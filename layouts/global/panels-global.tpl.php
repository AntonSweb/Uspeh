<div class="panel-display clearfix global" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if (!empty($content['header'])): ?>
  <div class="panel-panel panel-col-header">
    <div class="inside"><?php print $content['header']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['content'])): ?>
  <div class="panel-panel panel-col-content">
    <div class="inside"><?php print $content['content']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['footer'])): ?>
  <div class="panel-panel panel-col-footer">
    <div class="inside"><?php print $content['footer']; ?></div>
  </div>
  <?php endif; ?>
</div>