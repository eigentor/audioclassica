<?php if ($teaser) { ?>
<div class="produkt-teaser">
   <div id="produkt-hauptbild-kleiner">
    <table class="produkt-teaser-bildzentrierer">
     <tr>
      <td><a href="<?php print $node_url?>"><?php print $field_image_cache[0]['view'] ?></a></td>
      </tr>
    </table>
    </div>
      <h3 class="produkt-teaser-head"><a href="<?php print $node_url?>"><?php print $title?></a></h3>
    
    <div class="produkt-teaser-haupttext"><?php print $node->content['body']['#value'] ?></div>
    <div class="rotschrift kleinpreis"><?php print $node->content['display_price']['#value']; ?></div>
    <div class="cleardiv"></div>
</div>
<?php } else { ?>
<div id="produkt-linkespalte" class="<?php if (!$status) { print ' node-unpublished'; } ?>">
   <div id="produktbilder">
     <div id="produkt-hauptbild" <?php if ($field_produktbild_2[0]['filepath']) { print 'class="produkt-hauptbild-paddingunten"';} ?> >
     <?php print $field_image_cache[0]['view'] ?></div>
     
     <div id="produktbild-2">
      <?php print $field_produktbild_2[0]['view'] ?>
     </div>
     <div id="produktbild-3">
      <?php print $field_produktbild_3[0]['view'] ?>
     </div>
     <div id="produktbild-4">
      <?php print $field_produktbild_4[0]['view'] ?>
     </div>
     
    <div class="cleardiv">  </div>
  </div>
  <?php print $field_tabelle_technische_daten[0]['view'] ?>
  <div class="rotschrift grosspreis"><!-- <?php print $sell_price ?> --><?php print $node->content['display_price']['#value']; ?> <span class="mehrwert"> <?php print $field_produkt_mehrwertsteuer[0]['view'] ?></span></div>
  <!-- <?php print $node->content['add_to_cart']["#value"] ?> -->
  
  <?php 
  /*if ($language == de) {
    $zielformular = 'node/8';
  } else {
    $zielformular = 'node/26';
  };*/
  /*$zielformular = 'node/8';
    
  $directorder = array(
	'#action'=>url($zielformular),
	'#type'=>'form',
	'product'=>array('#type'=>'hidden','#value'=>$node->title),
	'nid'=>array('#type'=>'hidden','#value'=>$node->nid),
	'prize'=>array('#type'=>'hidden','#value'=>$node->sell_price),
	'submit'=>array('#type'=>'submit','#value'=>t('Request')),
	);
	print drupal_render_form("directorder",form_builder("directorder",$directorder)); */
?>
</div>
<div id="produkt-rechtespalte" class="<?php if (!$status) { print ' node-unpublished'; } ?>">
   <div id="produkt-haupttext">
  <h2><?php print $title ?></h2>
  <?php print $field_liste_hauptvorteile[0]['view'] ?>
  <?php print $node->content['body']['#value'] ?></div>
  <div id="haupttext"><?php print $field_zweiter_text[0]['view'] ?></div>
  <div class="cleardiv"></div>
</div>
<div class="cleardiv">  </div>
<?php }; ?>

