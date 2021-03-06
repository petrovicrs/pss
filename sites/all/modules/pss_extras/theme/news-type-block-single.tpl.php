<div class="views-field views-field-image">
    <?php if(isset($tagLink)) {?>
        <a href="<?php echo $tagLink; ?>"><img src="<?php echo isset($tagImageLink) ? $tagImageLink : '/sites/default/files/news-type-images/no-image.png'; ?>"></a>
    <?php }?>
</div>
<div class="views-field views-field-body">
    <?php if(isset($tagLink)) {?>
        <div class="views-field views-field-title"><a href="<?php echo $tagLink; ?>"><?php echo isset($tagTitle) ? $tagTitle : ''; ?></a></div>
    <?php } else { ?>
        <div class="views-field views-field-title"><?php echo isset($tagTitle) ? $tagTitle : ''; ?></div>
    <?php } ?>
    <?php if(isset($tagNewss) && is_array($tagNewss)) { $el_count = count($tagNewss); ?>
        <?php foreach ($tagNewss as $key => $tagNews) { $el_key = $key + 1 ;?>
            <div class="tag-news tag-news-<?php print $el_key;?> <?php echo $el_key == 1 ? 'first' : '';?> <?php echo $el_key == $el_count? 'last' : '';?>">
                <div class="tag-news-number"><span class="news-number-text"><?php echo t('number');?> </span><?php echo isset($tagNews['tagNewsNum']) ? $tagNews['tagNewsNum'] : '';?></div>
                <div class="tag-news-title">
                    <?php if (isset($tagNews['tagNewsPath'])) { ?>
                        <a href="<?php echo $tagNews['tagNewsPath']; ?>">
                            <?php echo isset($tagNews['tagNewsTitle']) ? $tagNews['tagNewsTitle'] : '';?>
                        </a>
                    <?php } else { ?>
                        <?php echo isset($tagNews['tagNewsTitle']) ? $tagNews['tagNewsTitle'] : '';?>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>
