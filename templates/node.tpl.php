<?php if(!$page): ?>
<div id="node-<?php print $node->nid; ?>" class="oc-post <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php else: ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
    <article>
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
          <h2 <?php print $title_attributes;?> class="oc-post__title">
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
          </h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($display_submitted): ?>

        <div class="content clearfix"<?php print $content_attributes; ?>>
          <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            print render($content);
          ?>
        </div>

        <div class="meta submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </div>
      <?php endif; ?>
      <?php
        // Remove the "Add new comment" link on the teaser page or if the comment
        // form is being displayed on the same page.
        if ($teaser || !empty($content['comments']['comment_form'])) {
          unset($content['links']['comment']['#links']['comment-add']);
        }
      ?>

      </article>
  </div>
