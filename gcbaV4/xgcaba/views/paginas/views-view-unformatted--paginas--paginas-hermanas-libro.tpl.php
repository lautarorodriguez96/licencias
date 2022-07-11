<?php
/**
 * OVERRIDE DE LA VIEW PARA AGREGAR EL BOOK PADRE A LA LISTA DE BOOKS HERMANOS
 */

if (arg(0) == 'node' && is_numeric(arg(1))) {
  $nid = arg(1);
  $node_from_url = node_load($nid);
  $parent = node_load($node_from_url->book['bid']);
}
$i=0;
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if($i==0): ?>
    <div class="<?php print $classes_array[$id]; ?>">
    <?php if($node_from_url->nid == $node_from_url->book['bid']):?>    
         <?php  echo "<strong class='book-menu-selected'><a href='".url('node/'.$parent->nid)."'>".$parent->title."</a></strong>"; ?>
    <?php else: ?>
        <?php  echo "<a href='".url('node/'.$parent->nid)."'>".$parent->title."</a>"; ?>
    <?php endif; ?>
    </div>
  <?php endif; ?>  
  <div class="<?php print $classes_array[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php
$i++;
endforeach;
?>