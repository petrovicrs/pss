<?php if (isset($blocks) && is_array($blocks)) {?>
    <?php foreach($blocks as $blockNo => $block) { $blockNo++;?>
    <?php echo $blockNo % 4 == 1 ? '<div class="row">' : ''; ?>
<div class="views-row views-row-<?php echo $blockNo;?> <?php echo $blockNo % 2 == 0 ? 'views-row-even' : 'views-row-odd'; ?> <?php echo $blockNo == 1 ? 'views-row-first' : '';?> <?php echo $blockNo == count($blocks) ? 'views-row-last' : '';?> <?php echo $blockNo % 4 == 1 ? 'float-left' : '';?> <?php echo $blockNo % 4 == 0 ? 'float-right' : '';?> <?php echo isset($block['classes']) && is_array($block['classes'])? implode(' ', $block['classes']) : '';?> ">
    <?php echo $block['content']; ?>
</div>
    <?php echo $blockNo % 4 == 0 ? '</div>' : ''; ?>
    <?php } ?>
<?php } ?>
