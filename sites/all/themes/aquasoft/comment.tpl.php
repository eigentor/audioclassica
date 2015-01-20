<div class="comment<?php if ($comment->status == COMMENT_NOT_PUBLISHED) print ' comment-unpublished'; ?>">
  <?php if ($picture) {
    print $picture;
  } ?>
  <h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <small class="submitted"><?php print $submitted; ?></small>
    <div style="margin: 0 20px; "><?php print $content; ?></div>
    <small class="links">&raquo; <?php print $links; ?></small>
</div>
