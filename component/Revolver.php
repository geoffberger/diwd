<div id="revolver<?php print $nid; ?>" class="baffinBucket revolverComponent">
  <h2><?php print $title; ?></h2>
  <ul>
    <?php foreach ($list as $item): ?>
      <li><?php print $item['value']; ?></li>
    <?php endforeach; ?>
  </ul>
</div>
