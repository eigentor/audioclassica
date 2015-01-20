<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
  <head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  </head>
  <body>
  <div id="container">
  <div id="homelink"><a class="homelink-link" href="<?php print $base_path ?>"></a></div>
     <div id="container-innen">
      <div id="container-innen-2">
        <div id="container-innen-3">
         <div id="content-hintercontainer">
           <div id="content-container">
           <div id="linksblock">
             <div id="menu-left">
              <?php print $sidebar_left ?>
              </div>
              </div>
              
            <div id="wrapper">
            <!-- Der Inhalt wird möglichst weit oben platziert -->
            
               <div id="content">
               <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php }; ?>
               <?php print $messages ?>
               <h2><?php print $title ?></h2>
               
               <!-- A region above the content -->
               <?php if($centertop): ?>
               <div id="centertop">
                <?php print $centertop; ?>
               </div>
               <?php endif; ?>
               
              <?php print $content ?>
               <div class="cleardiv"></div>
                 </div>
              </div>
            <div class="cleardiv"></div> 
             
             
              <div id="slogan">
               <h2><?php if($language == 'de') { print 'Klassisches High-End ';} 
                 elseif ($language == 'en') { print 'Classical High End ';}
                 else { print 'Klassisches High-End ';} ?> <br />
               Audiophile Gateway Germany</h2>
              </div>
             </div>
             <!-- Die Menüs werden absolut positioniert -->
            <div id="menu-top">
            <?php print $haupt_menu ?>
             <!--  <?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')) ?><?php } ?> -->
             </div>
          </div>
        <div id="footer">
          <div id="footer-left">
              <div id="footer-left-text"> Copyright by Audiophile Gateway Germany 2008&nbsp;&nbsp; Created by <a href="http://rufzeichen-online.de" target="_blank"><img src="<?php print $base_path.$directory ?>/images/rufzeichen.gif " alt="drupal webdesign hannover internet agentur" style="padding-top:3px" /> </a>&nbsp; Powered by <a href="http://drupalcenter.de" target="_blank">Drupal</a></div> <div id="footer-left-login-key"><?php print $login_key ?></div>
           </div> 
           <div id="footer-right">
            <?php print $impressum ?>
           </div>    
                </div>
        </div>
      </div>
    </div>
  </div>
	<?php print $closure ?>
  </body>
</html>
