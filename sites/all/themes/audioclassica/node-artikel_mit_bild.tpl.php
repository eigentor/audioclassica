<?php if ($teaser) { ?>
<div class="produkt-teaser">
   <div id="produkt-hauptbild-kleiner">
    <table class="produkt-teaser-bildzentrierer">
     <tr>
      <td><a href="<?php print $node_url?>"><?php print $field_artikel_hauptbild[0]['view'] ?></a></td>
      </tr>
    </table>
    </div>
      <h3 class="produkt-teaser-head"><a href="<?php print $node_url?>"><?php print $title?></a></h3>
    
    <div class="produkt-teaser-haupttext"><?php print $field_atikel_text[0]['view'] ?></div>
        <div class="cleardiv"></div>
</div>
<?php } else { ?>
<div id="artikel-hauptbild" class="imagefloatleft">
 <?php print $field_artikel_hauptbild[0]['view'] ?>
</div>
<?php print $field_atikel_text[0]['view'] ?>
<?php }; ?>
