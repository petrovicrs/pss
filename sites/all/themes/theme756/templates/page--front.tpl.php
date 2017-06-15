<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content_top']: Items for the header region.
 * - $page['content']: The main content of the current page.
 * - $page['content_bottom']: Items for the header region.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper">

  <div id="page">

  <header id="header" role="banner" class="clearfix">

    <?php if ($page['menu']): ?>
        <div class="section-1 clearfix">
            <?php print render($page['menu']); ?>
        </div>
    <?php endif; ?>
    <?php if ($page['header']): ?>
        <div class="section-2 clearfix">
            <?php print render($page['header']); ?>
        </div><!-- /.section -->
    <?php endif; ?>
    <?php if ($page['header_bottom']): ?>
        <div class="section-3 clearfix">
            <?php print render($page['header_bottom']); ?>
        </div><!-- /.section -->
    <?php endif; ?>

  </header><!-- /#header -->


  <div id="site-logo-wrapper" class="section-site-logo clearfix">
      <?php if ($logo): ?>
          <div class="section-logo-wrapper logo-wrapper">
              <a href="<?php print $front_page; ?>" title="<?php print $site_name ? $site_name : t('Home'); ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>" alt="<?php print $site_name ? $site_name : t('Home'); ?>" />
              </a>
          </div>
      <?php endif; ?>

      <?php if ($site_message || $site_slogan): ?>
          <div id="slogan-and-message">
              <?php if ($site_slogan): ?>
                  <div id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>
              <?php if ($site_message): ?>
                  <div id="site-message"><?php print $site_message; ?></div>
              <?php endif; ?>
          </div>
      <?php endif; ?>
      <?php if (isset($current_magazine_number) && !empty($current_magazine_number)): ?>
          <div id="current-magazine-number">
              <div class="number"><sup class="sup">no.</sup><?php echo $current_magazine_number; ?></div>
          </div>
      <?php endif; ?>
  </div>

  <div id="main-wrapper">
    <div id="main" class="clearfix">

    <?php if ($page['sidebar_first']): ?>
        <aside id="sidebar-first" class="column sidebar" role="complementary">
            <div class="section">
                <?php print render($page['sidebar_first']); ?>
            </div><!-- /.section -->
        </aside><!-- /#sidebar-first -->
    <?php endif; ?>

    <?php if ($page['sidebar_second']): ?>
        <aside id="sidebar-second" class="column sidebar" role="complementary">
            <div class="section">
                <?php print render($page['sidebar_second']); ?>
            </div><!-- /.section -->
        </aside><!-- /#sidebar-second -->
    <?php endif; ?>

      <div id="content" class="column" role="main">
        <div class="section">

        <?php if ($breadcrumb): ?>
            <div id="breadcrumb" class="clearfix"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
        
        <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>
        
        <?php print render($title_prefix); ?>
        
        <?php if ($title): ?>
          <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        
        <?php print render($title_suffix); ?>
        
        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
        <?php endif; ?>
        
        <?php print render($page['help']); ?>
        
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        
        <?php print render($page['content_top']); ?>
        <?php print render($page['content']); ?>
        <?php print render($page['content_bottom']); ?>
        
        </div><!-- /.section -->
      </div><!-- /#content -->

    </div><!-- /#main -->
  </div><!-- /#main-wrapper -->


      <footer id="footer" role="contentinfo">
          <div class="footer-wrapper clearfix">
              <?php if ($logo): ?>
                  <div class="footer-logo-wrapper">
                      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-footer">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                      </a>
                  </div>
              <?php endif; ?>
              <div class="footer-brand-wrapper">
                  Professional Security System Magazine &copy; 2017 | <a href="/privacy-policy">Privacy policy</a>
              </div>
              <?php print render($page['footer']); ?>
          </div><!-- /#footer-wrapper -->
      </footer><!-- /#footer -->

  </div><!-- /#page -->
</div><!-- /#page-wrapper -->

<script>
    if (jQuery(window).width() <= 767) {
        var content = jQuery('#content');
        jQuery('#sidebar-first').insertAfter(content);
        jQuery('#sidebar-second').insertAfter(content);
    }
</script>