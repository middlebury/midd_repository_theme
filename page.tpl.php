<?php

/**
 * @file
 * Page template for the midd_repository_theme theme.
 */
?>
<?php if (!empty($page['page_top'])): ?>
  <?php print render($page['page_top']); ?>
<?php endif; ?>
<div class="container">
  <header class="global-header">
    <div class="row">
      <div class="col-xs-6 col-md-12">
        <div class="global-header__logo">
          <div itemscope itemtype="http://schema.org/Organization" class="wordmark">
            <a itemprop="url" href="http://www.middlebury.edu">
              <img itemprop="logo" src="//cdn.middlebury.edu/middlebury.edu/2010/images/logo.png" width="380" height="110" alt="Middlebury">
            </a>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-12">
        <div class="global-header__menu-btn">
          <a href="#" class="js-menu-btn">
            <span class="icon icon--menu"></span>
          </a>
        </div>
      </div>
    </div>
    <nav class="global-nav">
      <div class="global-header__search">
        <form id="midd_search" class="search-form" action="http://www.middlebury.edu/search" method="get" target="_top">
          <label for="midd_search_query" class="search-form__label sr-only"><?php print t('Search Midd'); ?></label>
          <input type="search" id="midd_search_query" class="search-form__input x-webkit-speech" name="q2" placeholder="<?php print t('Search Midd'); ?>" x-webkit-speech required>
          <button type="submit" id="midd_search_submit" class="search-form__button">
            <span class="icon icon--search"><?php print t('Search'); ?></span>
          </button>
          <input type="hidden" id="midd_ajax_search_url" value="http://www.middlebury.edu/middlebury_go/search">
        </form>
      </div>
      <ul class="global-nav__list global-nav__list--top">
        <li><a href="http://www.middlebury.edu/admissions"><?php print t('Admissions'); ?></a></li>
        <li><a href="http://www.middlebury.edu/academics"><?php print t('Academics'); ?></a></li>
        <li><a href="http://www.middlebury.edu/student-life"><?php print t('Student Life'); ?></a></li>
        <li><a href="http://www.middlebury.edu/athletics"><?php print t('Athletics'); ?></a></li>
        <li><a href="http://www.middlebury.edu/arts"><?php print t('Arts'); ?></a></li>
        <li><a href="http://www.middlebury.edu/international"><?php print t('Middlebury International'); ?></a></li>
      </ul>
      <ul class="global-nav__list global-nav__list--bottom">
        <li><a href="http://www.middlebury.edu/about"><?php print t('About Middlebury'); ?></a></li>
        <li><a href="http://www.middlebury.edu/sustainability"><?php print t('Sustainability'); ?></a></li>
        <li><a href="http://www.middlebury.edu/giving"><?php print t('Giving'); ?></a></li>
        <li><a href="http://www.middlebury.edu/newsroom"><?php print t('News Room'); ?></a></li>
        <li><a href="http://www.middlebury.edu/events"><?php print t('Calendar of Events'); ?></a></li>
        <li><a href="http://www.middlebury.edu/offices"><?php print t('Offices &amp; Services'); ?></a></li>
      </ul>
    </nav>
  </header>
</div>
<article id="main-content" class="pagecontent">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page">
          <div class="row">
            <div<?php print !empty($center_class) ? ' class="' . $center_class . '"' : ''; ?>>
              <?php if (!empty($breadcrumb)): ?>
                <?php print render($breadcrumb); ?>
              <?php endif; ?>
              <a href="#midd-pagemenu" class="jumpnav-anchor">Jump to navigation &darr;</a>
              <?php if (!empty($title)): ?>
                <header>
                  <h1><?php print $title; ?></h1>
                </header>
              <?php endif; ?>
              <div class="region region-content">
                <?php if (!empty($messages)): ?>
                  <?php print render($messages); ?>
                <?php endif ?>
                <?php if (!empty($page['highlighted'])): ?>
                  <?php print render($page['highlighted']); ?>
                <?php endif; ?>
                <?php if (!empty($page['help'])): ?>
                  <?php print render($page['help']); ?>
                <?php endif; ?>
                <?php if (!empty($page['content'])): ?>
                  <?php print render($page['content']); ?>
                <?php endif; ?>
              </div>
            </div>
            <div<?php print !empty($right_class) ? ' class="' . $right_class . '"' : ''; ?>>
              <?php if (!empty($page['sidebar_second'])): ?>
                <aside class="sidebar sidebar--secondary">
                  <?php print render($page['sidebar_second']); ?>
                </aside>
              <?php endif; ?>
            </div>
            <div<?php print !empty($left_class) ? ' class="' . $left_class . '"' : ''; ?>>
              <aside id="midd-pagemenu" class="sidebar sidebar--primary">
                <?php if (!empty($page['sidebar_first'])): ?>
                  <?php print render($page['sidebar_first']); ?>
                <?php endif; ?>
                <?php if (!empty($page['featured'])): ?>
                  <?php print render($page['featured']); ?>
                <?php endif; ?>
              </aside>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
<footer class="global-footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="global-footer__audience-list">
          <li><a href="http://students.middlebury.edu"><?php print t('Current Students'); ?></a></li>
          <li><a href="http://parents.middlebury.edu"><?php print t('Parents'); ?></a></li>
          <li><a href="http://facstaff.middlebury.edu"><?php print t('Faculty &amp; Staff'); ?></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-6">
        <h3><?php print t('Alumni'); ?></h3>
        <ul>
          <li><a href="http://www.middlebury.edu/alumni" title="<?php print t('For Alumni'); ?>"><?php print t('Middlebury College'); ?></a></li>
          <li><a href="http://www.middlebury.edu/alumni/ls" title="<?php print t('For Alumni'); ?>"><?php print t('Middlebury Language Schools'); ?></a></li>
          <li><a href="http://www.middlebury.edu/alumni/blse" title="<?php print t('For Alumni'); ?>"><?php print t('Middlebury Bread Loaf School of English'); ?></a></li>
          <li><a href="http://alumni.middlebury.edu" title="<?php print t('For Alumni'); ?>"><?php print t('Middlebury Institute of International Studies at Monterey'); ?></a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-md-6">
        <h3><?php print t('Quick Links'); ?></h3>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <ul>
              <li><a href="http://go.middlebury.edu/er"><?php print t('Emergency'); ?></a></li>
              <li><a href="http://go.middlebury.edu/bannerweb"><?php print t('BannerWeb'); ?></a></li>
              <li><a href="http://go.middlebury.edu/webmail"><?php print t('Webmail'); ?></a></li>
              <li><a href="http://go.middlebury.edu/directory"><?php print t('Directory'); ?></a></li>
              <li><a href="http://go.middlebury.edu/library"><?php print t('Library'); ?></a></li>
              <li><a href="http://go.middlebury.edu/helpdesk"><?php print t('Technology Help'); ?></a></li>
              <li><a href="http://go.middlebury.edu/calendar?academic"><?php print t('Academic Calendar'); ?></a></li>
              <li><a href="http://go.middlebury.edu/web/about"><?php print t('About this Site'); ?></a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
            <ul>
              <li><a href="http://go.middlebury.edu/jobseekers"><?php print t('Job Seekers'); ?></a></li>
              <li><a href="http://go.middlebury.edu/bookstore"><?php print t('Bookstore'); ?></a></li>
              <li><a href="http://boxoffice.middlebury.edu"><?php print t('Box Office'); ?></a></li>
              <li><a href="http://museum.middlebury.edu"><?php print t('Museum of Art'); ?></a></li>
              <li><a href="http://map.middlebury.edu"><?php print t('Campus Map'); ?></a></li>
              <li><a href="http://go.middlebury.edu/privacy"><?php print t('Privacy'); ?></a></li>
              <li><a href="http://go.middlebury.edu/copyright"><?php print t('Copyright'); ?></a></li>
              <li><a href="https://secure.ethicspoint.com/domain/media/en/gui/28296/index.html"><?php print t('EthicsPoint'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xs-12">
        <h3><?php print t('Directions &amp; Contact Information'); ?></h3>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <p><a href="http://go.middlebury.edu/directory"><?php print t('Directory'); ?></a></p>
            <p><a href="http://go.middlebury.edu/directions"><?php print t('Directions to Middlebury'); ?></a></p>
            <p><a href="http://go.middlebury.edu/transportation"><?php print t('Transportation Options'); ?></a></p>
            <h4><?php print t('Mailing Address'); ?></h4>
            <div itemscope itemtype="http://schema.org/Organization">
              <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <p>
                  <span itemprop="name streetAddress"><?php print t('Middlebury College'); ?></span><br>
                  <span itemprop="addressLocality">Middlebury</span>,
                  <span itemprop="addressRegion">Vermont</span>
                  <span itemprop="postalCode">05753</span><br>
                  <span itemprop="telephone"><a href="tel:+18024435000">802-443-5000</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div itemscope itemtype="http://schema.org/Organization">
              <h4 itemprop="name"><?php print t('Admissions'); ?></h4>
              <p>
                <a itemprop="telephone" href="tel:+18024433000">802-443-3000</a><br>
                <a itemprop="email" href="mailto:admissions@middlebury.edu">admissions@middlebury.edu</a>
              </p>
            </div>
            <div itemscope itemtype="http://schema.org/Organization">
              <h4 itemprop="name"><?php print t('Public Safety'); ?></h4>
              <p>
                <a itemprop="telephone" href="tel:+18024435911">802-443-5911</a><br>
                <a itemprop="email" href="mailto:publicsafety@middlebury.edu">publicsafety@middlebury.edu</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <p class="global-footer__copyright">&copy; 2016 The President and Fellows of Middlebury College. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<?php if (!empty($page['page_bottom'])): ?>
  <?php print render($page['page_bottom']); ?>
<?php endif; ?>
<div class="menu-overlay js-menu-overlay"></div>
