<?php print $header; ?>

<main id="main" class="<?php print $classes; ?>" <?php print $attributes; ?>>
  <div class="helper">
    <?php print $messages; ?>
    <?php print $breadcrumb; ?>
    <?php print render($page['help']); ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>
  </div>

  <?php if (!drupal_is_front_page()): ?>
    <h1><?php print drupal_get_title(); ?></h1>
  <?php endif; ?>

  <?php print render($page['content']); ?>
</main>

<?php print $footer; ?>