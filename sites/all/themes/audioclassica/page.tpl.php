<?php 

/**
* This snippet loads up different page-type.tpl.php layout 
* files automatically. For use in a page.tpl.php file.
*
* This works with Drupal 4.5,  Drupal 4.6 and Drupal 4.7
*/

#if ($_GET['q'] == 'node/9') { 
#  include 'page-ohnepadding_rechts.tpl.php'; 
#  return; }

if ($node->type == 'startseite') { 
    include 'page-ohnetitel.tpl.php'; 
    return; }
    
if ($node->type == 'product') { 
    include 'page-ohnetitel.tpl.php'; 
    return; }
    
if ($node->type == 'prospekt_seite_1') { 
  include 'page-ohnetitel.tpl.php'; 
  return; }
  
if ($node->type == 'galerie') { 
  include 'page-ohnetitel.tpl.php'; 
  return; }
  
if ($node->type == 'fachartikel') { 
  include 'page-ohnetitel.tpl.php'; 
  return; }
  

    
include 'page-default.tpl.php'; /*if none of the above applies, load the page-default.tpl.php */
    return; 

?>
