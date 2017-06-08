<?php
drupal_add_css(drupal_get_path('theme', 'theme756') . '/css/fullwidth.css')
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
        <div id="main-wrapper" class="full-width">
            <div id="main" class="clearfix">
                <div id="content" class="column" role="main">
                    <div class="section">
                        <?php if ($messages): ?>
                            <div id="messages"><div class="section clearfix">
                                    <?php print $messages; ?>
                                </div></div> <!-- /.section, /#messages -->
                        <?php endif; ?>
                        <div class="background-image-holder" style="overflow: hidden; height: 100vh; width: 100vw; z-index: -1;background-image: url('/<?php echo drupal_get_path('module', 'betterlogin') . '/images/fantasy-woman-bckg.png'; ?>');">
                            <div class="image-holder">
                                <div class="image-inner-holder">
                                    <img src="/<?php echo drupal_get_path('module', 'betterlogin') . '/images/fantasy-woman-warrior-950.png'; ?>">
                                </div>
                            </div>
                            <div id="auth_box" class="password">
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
                                    <div class="login_link">
                                        <?php print l(t('Login'), 'user/login'); ?>
                                    </div>

                                    <?php if (variable_get('user_register')): ?>
                                        <div class="register_link">
                                            <?php print l(t('Register a new account'), 'user/register'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
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
