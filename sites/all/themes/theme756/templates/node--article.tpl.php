<?php
$articleType = '';
if (isset($node->field_article_type)) {
  $type = reset($node->field_article_type);
  $articleType = isset($type, $type[0], $type[0]['tid']) ? 'node-taxonomy-type-' . $type[0]['tid'] : '';
}
?>
<article id="node-<?php print $node->nid; ?>"
         class="<?php print $classes; ?> clearfix <?php print $articleType; ?>"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <div class="top-image">
          <?php print render($content['field_image']); ?>
        </div>
        <div class="inner-content">
            <div class="inner-content-element inner-content-left content-author-info">
              <?php if ($page): ?>
                <div class="node-created-by author-info">
                    <div class="inner-element">
                      <?php print $created_by_picture; ?>
                    </div>
                </div>
                <div class="node-magazine-number author-info">
                    <div class="inner-element">
                      <?php print $magazine_number; ?> - <?php print $for_period_months; ?> <?php print $for_period_year; ?>.
                    </div>
                </div>
                <div class="node-tags author-info">
                    <div class="inner-element">
                      <?php print render($content['field_tags']); ?>
                    </div>
                </div>
              <?php endif;?>
            </div>
            <div class="inner-content-element inner-content-center body-and-comments">
                <div class="node-title">
                  <?php print render($title_prefix); ?>
                  <?php if (!$page) {?>
                      <h2<?php print $title_attributes; ?>>
                          <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                      </h2>
                  <?php } else { ?>
                      <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
                  <?php } ?>
                  <?php print render($title_suffix); ?>
                </div>
                <div class="body">
                  <?php
                  hide($content['comments']);
                  hide($content['field_image']);
                  hide($content['links']);
                  hide($content['field_tags']);
                  hide($content['addtoany']);
                  print render($content);
                  ?>
                </div>
                <div class="comments">
                    <?php if (isset($comment_count) && (int)$comment_count) { ?>
                    <div class="comment-count-wrapper">
                        <span class="comment-count"><?php print $comment_count . ' ' . t('Comment count');?></span>
                    </div>
                    <?php }?>
                    <div class="comments-wrapper"><?php print render($content['comments']); ?></div>
                </div>
            </div>
            <?php if ($page) {?>
            <div class="inner-content-element inner-content-right content-share">
                <div class="inner-wrapper share-block">
                    <div class="a2a-title"><?php print t('Share article');?></div>
                    <div class="a2a-content-share"><?php print render($content['addtoany']); ?></div>
                </div>
                <div class="inner-wrapper newsletter-block">
                    <div class="newsletter">
                        NEWSLETTER
                    </div>
                </div>
                <?php if (isset($comment_count) && (int)$comment_count) { ?>
                <div class="inner-wrapper comment-count">
                    <div class="inner-content">
                        <span class="comment-count-icon"></span>
                        <span class="comment-count"><?php print $comment_count . ' ' . t('Comment count');?></span>
                    </div>
                </div>
                <?php }?>
            </div>
            <?php } ?>
        </div>
    </div>
</article>

