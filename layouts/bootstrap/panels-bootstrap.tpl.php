<div class="panel-display clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if (!empty($content['first'])): ?>
  <div class="panel-panel panel-col-first">
    <div class="inside"><?php print $content['first']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['second'])): ?>
  <div class="panel-panel panel-col-second">
    <div class="inside"><?php print $content['second']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['third'])): ?>
  <div class="panel-panel panel-col-third">
    <div class="inside"><?php print $content['third']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['fourth'])): ?>
  <div class="panel-panel panel-col-fourth">
    <div class="inside"><?php print $content['fourth']; ?></div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['fifth'])): ?>
  <div class="panel-panel panel-col-fifth">
    <div class="inside"><?php print $content['fifth']; ?></div>
  </div>
  <?php endif; ?>
</div>
