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
    <?php if(isset($tagNewss) && is_array($tagNewss)) { ?>
        <?php foreach ($tagNewss as $tagNews) { ?>
            <div class="tag-news">
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
