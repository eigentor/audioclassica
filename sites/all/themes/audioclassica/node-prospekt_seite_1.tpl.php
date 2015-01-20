<?php if ($teaser) { ?>

<div class="produkt-teaser">
   <div id="produkt-hauptbild-kleiner">
    <table class="produkt-teaser-bildzentrierer">
     <tr>
      <td><a href="<?php print $node_url?>"><?php print $field_teaser_foto[0]['view'] ?></a></td>
      </tr>
    </table>
    </div>
      <h3 class="produkt-teaser-head"><a href="<?php print $node_url?>"><?php print $title?></a></h3>
    
    <div class="produkt-teaser-haupttext"><?php print $field_prospekt_1_textfeld_1_obe[0]['view'] ?></div>
    <div class="cleardiv"></div>
</div>

<?php } else { ?> 

<div id="prospekt-1-hauptbild">
 <?php print $field_prospekt_1_hauptbild[0]['view'] ?>
</div>

<div id="prospekt-1-textfeld-oben">
<h2><?php print $title ?></h2>
<div id="prospekt-1-kleine-bilder">
 <div id="prospekt-1-mittleres-bild">
  <?php print $field_prospekt_1_mittleres_bild[0]['view'] ?><br />
 </div>
<div id="prospekt-1-kleine-bilder-thumbs">
 <?php print $field_prospekt_1_thumbs[0]['view'] ?>
<?php print $field_prospekt_1_thumbs[1]['view'] ?>
<?php print $field_prospekt_1_thumbs[2]['view'] ?>
</div>
</div>
 <?php print $field_prospekt_1_textfeld_1_obe[0]['view'] ?>
 <p class="prospekt-seiten-link"><?php print $field_link_weitere_infos[0]['view'] ?></p>
</div>
<?php if (isset($field_zwischenueberschrift[0]['view'])) { ?><h3 class="zwischenhead-prospekt-1"><?php print $field_zwischenueberschrift[0]['view'] ?></h3><?php } ?>
<div id="prospekt-1-textfeld-unten">
<div id="prospekt-1-tabelle">
 <?php print $field_prospekt_1_tabelle[0]['view'] ?>
</div>
 <?php print $field_prospekt_1_textfeld_2_unt[0]['view'] ?>
</div>


<div class="cleardiv"></div>

<?php }; ?>


