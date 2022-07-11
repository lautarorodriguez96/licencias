<nav class="pagination-wrap" role="navigation">
  <ul class="pagination pager">
    <?php foreach($variables['items'] as $li){ ?>
        <li<?php if(isset($li['class'])){ print ' class="' . implode(' ', $li['class']) . '"';}?>>
        <?php print_r ($li['data']) ?></li>
    <?php }?>
  </ul>
</nav>

