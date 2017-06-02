<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
  $colNum = 1;
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
<?php
  $rowCount = $id + 1;
  echo $rowCount == 1 || $rowCount == 4 || $rowCount == 6 ? '<div class="views-column views-column-'.$colNum++.'">' : '';
?>
    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
      <?php print $row; ?>
    </div>
<?php
  echo $rowCount == 3 || $rowCount == 5 || $rowCount == 8 ? '</div>' : '';
?>
<?php endforeach; ?>
