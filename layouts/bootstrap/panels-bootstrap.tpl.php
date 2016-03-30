<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="panel-display clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col-first">
    <div class="inside"><?php print $content['first']; ?></div>
  </div>

  <div class="panel-panel panel-col-second">
    <div class="inside"><?php print $content['second']; ?></div>
  </div>

  <div class="panel-panel panel-col-third">
    <div class="inside"><?php print $content['third']; ?></div>
  </div>

  <div class="panel-panel panel-col-fourth">
    <div class="inside"><?php print $content['fourth']; ?></div>
  </div>

  <div class="panel-panel panel-col-fifth">
    <div class="inside"><?php print $content['fifth']; ?></div>
  </div>
</div>
