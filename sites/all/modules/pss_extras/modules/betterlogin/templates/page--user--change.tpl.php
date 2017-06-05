<div class="background-image-holder" style="height: 100vh; width: 100vw; z-index: -1;background-image: url('/<?php echo drupal_get_path('module', 'betterlogin') . '/images/fantasy-woman-bckg.png'; ?>');">
    <div class="image-holder">
        <div class="image-inner-holder">
            <img src="/<?php echo drupal_get_path('module', 'betterlogin') . '/images/fantasy-woman-warrior.png'; ?>">
        </div>
    </div>
    <div id="auth_box" class="reset">
      <div id="top_part">
        <h1 id="the_logo">
          <a href="<?php print url('<front>'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>">
          </a>
        </h1>
      </div>

      <div id="middle_part">
        <h2 class="title"><?php print $title; ?></h2>

        <?php print $messages; ?>

        <?php print render($page['content']); ?>
      </div>

      <div id="bottom_part">
        <div class="back_link">
          <a href="<?php print url('<front>'); ?>">&larr; <?php print t('Back'); ?> <?php print $site_name; ?></a>
        </div>
      </div>
    </div>
</div>
