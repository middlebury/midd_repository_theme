<?php

/**
 * @file
 * Page node template for the midd_repository_theme theme.
 */
?>
<article id="<?php print !empty($title) ? drupal_strtolower(drupal_clean_css_identifier($title)) : 'node-' . $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!empty($title)): ?>
    <header>
      <h1><?php print $title; ?></h1>
    </header>
  <?php endif; ?>
  <section class="contents">
    <?php hide($content['links']); ?>
    <?php print render($content); ?>
    <?php if ($display_submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php print render($content['links']); ?>
  </section>
</article>
