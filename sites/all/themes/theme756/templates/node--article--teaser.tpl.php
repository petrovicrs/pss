<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="view news-by-type-block-view">
        <div class="view-content">
            <div class="views-row">
                <div class="views-field views-field-nothing-1">
                    <div class="field-content">
                        <div>
                            <div class="news-image">
                                <div class="image">
                                    <a href="<?php print $node_url; ?>">
                                        <img src="<?php print $article_image;?>">
                                    </a>
                                </div>
                                <div class="term"><?php print $article_field_article_type;?></div>
                            </div>
                            <div class="news-content">
                                <div class="title-and-body">
                                    <div class="news-title">
                                        <a href="<?php print $node_url; ?>">
                                            <?php /*print mb_ucfirst(mb_strtolower($title));*/ ?>
                                            <?php print $title; ?>
                                        </a>
                                    </div>
                                    <div class="news-body">
                                        <?php print render($content['body']); ?>
                                    </div>
                                </div>
                                <div class="news-read-more">
                                    <span class="read-more">
                                        <a href="<?php print $node_url; ?>"><?php print t('Read more'); ?></a>
                                    </span>
                                    <span class="number"><?php print $article_magazine_number; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>