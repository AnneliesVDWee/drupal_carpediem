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
 * - $page['content']: The main content of the current page.
 * - $page['sidebar']: Items for the sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">

    <header id="header" role="banner"><div class="section clearfix" id="header-wrapper">

        <?php if ($logo): ?>
        <h1 id="logo-container">
            <?php if ($site_name): ?>
            <span class="element-invisible"><?php print $site_name; ?></span>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    Carpe Diem
                </a>
            <?php endif; ?>
        </h1>
        <?php endif; ?>

        <?php print render($page['header']); ?>

        <?php if ($main_menu): ?>
            <nav id="navigation" role="navigation"><div class="section">
                <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array()), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'))));  ?>
            </div></nav> <!-- /.section, /#navigation -->
        <?php endif; ?>

    </div></header> <!-- /.section, /#header -->



    <div id="main-wrapper"><div id="main" class="clearfix">
        <?php if ($page['sidebar']): ?>
        <aside id="sidebar" class="column sidebar clearfix " role="complementary">
            <div class="section">
            <?php print render($page['sidebar']); ?>
            </div> <!-- /.section -->
        </aside> <!--  /#sidebar -->
        <?php endif; ?>
        <?php if ($page['featured']): ?>
            <div id="featured"><div class="" id="featured-wrapper">
            <?php print render($page['featured']); ?>
            </div></div> <!-- /.section, /#featured -->
        <?php endif; ?>

        <div id="content" class="column clearfix" role="main">
            <div class="section clearfix">
            <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
            </div> <!-- /.section-->
        </div> <!-- /#content -->
    </div></div> <!-- /#main, /#main-wrapper -->


    <footer id="footer" role="contentinfo">
        <div class="section" id="footer-wrapper">
            <div id="footer-columns" class="clearfix">

                <div class="footer-firstcolumn">
                  <?php if ($page['footer_firstcolumn']): ?>
                    <?php print render($page['footer_firstcolumn']); ?>
                  <?php endif; ?>
                </div>
                <div class="footer-secondcolumn">
                  <?php if ($page['footer_secondcolumn']): ?>
                    <?php print render($page['footer_secondcolumn']); ?>
                  <?php endif; ?>
                </div>
                <div class="footer-thirdcolumn">
                  <?php if ($page['footer_thirdcolumn']): ?>
                    <?php print render($page['footer_thirdcolumn']); ?>
                  <?php endif; ?>
                </div>
        </div></div>
</footer> <!-- /.section, /#footer -->




    </div></div> <!-- /#page, /#page-wrapper -->
