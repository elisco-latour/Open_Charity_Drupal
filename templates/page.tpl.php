<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
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
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header class="oc-header">
        <div class="oc-navigation">
            <div class="oc-container">
                <div class="oc-row">
                    <div class="oc-laptop__col--3 oc-logo__col oc-mobile__col--12">
                      <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                          <div class="oc-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></div>
                        </a>
                      <?php endif; ?>
                    </div>
                    <div class="oc-laptop__col--9">
                        <nav class="oc-main__menu">
                            <?php print theme('links__system_main_menu',
                            array('links' => $main_menu,
                                  'attributes' => array('id' => 'main-menu',
                                  'class' => array('links', 'inline', 'clearfix')),
                                  'heading' => t(''))); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="oc-drawer__trigger-container">
            <div class="oc-drawer__trigger">
            </div>
        </div>
    </header><!-- OC header end -->
    <main class="oc-main_wrapper">
      <div class="oc-content">
        <section class="oc-hero">
            <div class="oc-container">
                   <?php print render($page['oc_feature_title']); ?>
                <div class="oc-hero__description">
                  <?php print render($page['oc_featured']); ?>
                </div>
            </div>
        </section>
          <section class="oc-event">
              <div class="oc-container">
                  <div class=" oc-row oc-event">
                      <?php print render($page['oc_events']); ?>
                  </div>
              </div>
          </section><!-- Oc event section end -->

          <section class="oc-getinvolved">
              <div class="oc-container">
                  <div class="oc-row">
                      <div class="oc-section__header">
                          <?php print render($page['oc_involved_heading']); ?>
                      </div>
                  </div>
                  <div class="oc-row oc-getinvolved__cards">
                      <div class="oc-laptop__col--4 oc-mobile__col--12">
                          <?php print render($page['oc_involved_1']); ?>
                      </div>
                      <div class="oc-laptop__col--4 oc-mobile__col--12">
                          <?php print render($page['oc_involved_2']); ?>
                      </div>
                      <div class="oc-laptop__col--4 oc-mobile__col--12">
                          <?php print render($page['oc_involved_3']); ?>
                      </div>
                  </div>
              </div>
          </section> <!-- OC Get Involved Section end -->

          <section class="oc-mission">
              <div class="oc-container">
                  <div class="oc-row">
                      <div class="oc-section__header">
                          <?php print render($page['oc_missions_heading']); ?>
                      </div>
                  </div>
                  <div class="oc-row oc-mission__cards">
                      <div class="oc-laptop__col--4 oc-mobile__col--12 oc-mission__card">
                          <?php print render($page['oc_mission_1']); ?>
                      </div>
                      <div class="oc-laptop__col--4 oc-mobile__col--12 oc-mission__card">
                          <?php print render($page['oc_mission_2']); ?>
                      </div>
                      <div class="oc-laptop__col--4 oc-mobile__col--12 oc-mission__card">
                          <?php print render($page['oc_mission_3']); ?>
                      </div>
                  </div>
                  <div class="oc-row">
                      <div class="oc-section__separator"></div>
                  </div>
              </div>
          </section> <!-- OC missions section end -->

          <section class="oc-members">
              <div class="oc-container">
                  <div class="oc-row">
                      <div class="oc-section__header">
                          <?php print render($page['oc_members_heading']); ?>
                      </div>
                  </div>
                  <div class="oc-row oc-members__logos">
                          <?php print render($page['oc_members_content']); ?>
                  </div>
              </div>
          </section><!-- OC members section end -->

          <section class="oc-blog">
              <div class="oc-container">
                  <div class="oc-row">
                      <div class="oc-section__header">
                          <?php print render($page['oc_blog_heading']); ?>
                      </div>
                  </div>
                  <div class="oc-row">
                      <?php print render($page['content']);  ?>
                  </div>
              </div>
          </section> <!-- OC blog section -->

          <footer class="oc-footer">
              <div class="oc-container">
                  <div class="oc-social">
                    <?php print render($page['oc_footer_social']); ?>
                  </div>
                  <div class="oc-copyright">
                      <?php print render($page['oc_footer_copyright']); ?>
                  </div>
              </div>
          </footer><!-- En footer -->
      </div> <!-- End OC main content -->
      <div class="oc-drawer">
          <nav class="oc-drawer__navigation">
            <?php print render($page['oc_drawer_navigation']); ?>
          </nav>
      </div>
    </main><!-- End of the mein -->
