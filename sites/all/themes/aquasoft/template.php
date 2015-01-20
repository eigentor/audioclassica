<?php
// $Id: template.php,v 1.2.2.1 2006/11/16 17:31:07 Gurpartap Exp $

function phptemplate_search_theme_form($form) {
  return _phptemplate_callback('search-box', array('form' => $form));
}

function aquasoft_primary_links() {
  $links = menu_primary_links();
  if ($links) {
    foreach ($links as $link) {
      $link = l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment']);
      $cssid = str_replace(' ', '_', strip_tags($link));
      $output .= '<li id="'.$cssid.'">' . $link . '</li>';
    }; 
    $output .= '</ul>';
  }
  return $output;
}

function aquasoft_footer_primary_links() {
  $links = menu_primary_links();
  $imgurl = base_path() . drupal_get_path('theme', 'aquasoft') .'/images/';
  if ($links) {
      $output .= '<ul><li id="fcurrent"><a href="' . base_path() . '">Home</a></li><li><img src="' . $imgurl . 'navsep.gif" alt="" /></li></ul>';
    $output .= '<ul>';
    foreach ($links as $link) {
      $link = l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment']);
      $output .= '<li class="tbforum">' . $link . '</li>';
    }; 
    $output .= '</ul>';
  }
  return $output;
}

/*function phptemplate_stylesheet_import($stylesheet, $media = 'all') {
  if (strpos($stylesheet, 'misc/drupal.css') == 0) {
    return theme_stylesheet_import($stylesheet, $media);
  }
}*/

/*function aquasoft_regcp() {
global $user;
global $node;
if (!$user->uid) {
$ureg = base_path() . '/user/register';
print '<li id="Register"><a href="'.$ureg .'" title="">Register</a></li>';

  return $output;
}
else
if ($user->uid) {
$ureg = base_path() . '/user/' . print $node->uid;
print '<li id="User_CP"><a href="'.$ureg .'" title="">User CP</a></li>';

}
}*/