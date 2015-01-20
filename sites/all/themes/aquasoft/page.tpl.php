<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<div id="container">
  <div class="captionmid">
    <div class="captionleft"></div>
      <div class="captionright"></div>
        <?php if ($site_name) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a><?php } ?><?php if ($site_slogan) { ?> - <?php print $site_slogan ?><?php } ?>
  </div>
  <div class="shadleft">
    <div class="shadright">
      <div id="wrapper">
        <table class="tableborder" width="100%" cellpadding="3" border="0" cellspacing="1">
	      <tr>
		    <td class="toolbar" colspan="3">
              <div id="toolbar"><ul class="toolbarmenu" id="toolbar">
                <li style="float:right;" id="tbaero"><a href="http://www.aero-soft.com/"></a></li>
                <?php if ($logo) { ?><li id="tbhome"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></li><?php } ?>
                <?php if (isset($primary_links)) { ?><li><img src="<?php print  base_path() . drupal_get_path('theme', 'aquasoft') .'/images/navsep2.gif' ?>" alt="" /></li><?php print aquasoft_primary_links(); ?><?php } ?>
              </div>
			  <div id="headerreg">
                <?php print $header ?>
              </div>
			</td>
          </tr>
          <tr>
          <?php if ($sidebar_left) { ?>
            <td class="rightcol" valign="top">
              <?php print $sidebar_left ?>
            </td>
          <?php } ?>	
            <td class="content" valign="top">
              <div>
                <div class="navigation"><?php print $breadcrumb ?></div>
                <div style="clear:both;">&nbsp;</div>
                <div class="heading"><a href="<?php print $node_url?>"><?php print $title ?></a></div>
                <div class="tabs"><?php print $tabs ?></div>
                <?php print $help ?>
                <?php print $messages ?>
                <?php print $content; ?>
                <?php print $feed_icons; ?>
              </div>
            </td>
          <?php if ($sidebar_right) { ?>
            <td class="rightcol" valign="top">
              <?php if ($search_box) { ?>
			    <div id="search">
                  <div id="spotlight">
                    <?php print $search_box ?>
                  </div>
                </div>
              <?php } ?>	
          <?php print $sidebar_right ?>
            </td>
          <?php } ?>	
          </tr>
          <tr>
            <td class="footernav" colspan="3">
              <div id="footerreg">
                <?php print $footer_message ?>
              </div>
              <div id="footernav">
                <?php print aquasoft_footer_primary_links(); ?>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  
  <div class="shadbotmid">
    <div class="shadbotleft"></div>
      <div class="shadbotright"></div>
        &nbsp;
  </div>
</div>
<?php print $closure ?>
</body>
</html>