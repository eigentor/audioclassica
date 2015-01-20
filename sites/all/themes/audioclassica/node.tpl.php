<div class="nodearea<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="taxonomy"><?php print $terms?></span>
    <div class="entrytext"><?php print $content?></div>
    <?php if ($links) { ?><small class="links">&raquo; <?php print $links?></small><?php }; ?>
</div>
