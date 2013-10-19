<?php
/**
 * @file
 * Page template.
 */
?>
<header role="banner" class="header page-header container">
  <h1>
    <a class="h1" href="<?php print url('<front>'); ?>" rel="nofollow">
      <?php print $site_name; ?>
    </a>
  </h1>
  <?php if ($main_menu): ?>
  <nav role="navigation" class="page-navigation navbar">
    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="nav-collapse collapse navbar-responsive-collapse">
      <?php print $main_navigation; ?>
    </div>
  </nav><!-- /.navbar -->
  <?php endif; ?>
</header>

<main role="main" class="container" id="main-content">
  <?php print $messages; ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <?php print render($page['help']); ?>

  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

  <?php print render($page['content']); ?>

</main>

<footer role="contentinfo" class="footer page-footer container">
  <aside role="copyright">
    <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.hu">
      <img alt="Creative Commons Licenc" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" />
    </a><br />
    <a xmlns:cc="http://creativecommons.org/ns#" href="<?php print url('<front>') ?>" property="cc:attributionName" rel="cc:attributionURL">
      <?php print url('<front>') ?></a>
    <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">WebDevHub</span> című műve
    <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.hu">Creative Commons Nevezd meg! - Így add tovább! 3.0 Unported Licenc</a>
    alatt van.
  </aside>
</footer>
