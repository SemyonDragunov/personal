<header role="banner">
  <a href="/" title="Главная" id="logo"  class="image avatar">
    <?php if (!theme_get_setting('default_logo')): ?>
      <img src="<?php print theme_get_setting('logo'); ?>" alt="<?php print variable_get('site_name'); ?>" />
    <?php else: ?>
      <?php if (drupal_is_front_page()): ?>
        <h1><?php print variable_get('site_name'); ?></h1>
      <?php else: ?>
        <?php print variable_get('site_name'); ?>
      <?php endif; ?>
    <?php endif; ?>
  </a>

  <div class="pad-wrapper">
    <nav>
      <?php
      $menu = menu_navigation_links('main-menu');
      print theme('links__main_menu', array(
        'links' => $menu,
        'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('links'),
        )));
      ?>
    </nav>

    <?php if ($action): ?>
      <section class="region region-action">
        <?php print render($action); ?>
      </section>
    <?php endif; ?>
  </div>
</header>