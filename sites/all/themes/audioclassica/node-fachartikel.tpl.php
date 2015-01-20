
<!-- Block oben, für Nodes -->
<div id="fachartikel-oben">
 <div id="fachartikel-links">
 <div id="fachartikel-hauptbild">
  <a target="blank" href="<?php print base_path() . $field_fachartikel_pdf_artikel[0]['filepath']?>">
<?php print $field_fachartikel_hauptbild[0]['view']?></a>
 </div>
<a class="pdf-link" target="blank" href="<?php print base_path() . $field_fachartikel_pdf_artikel[0]['filepath']?>"><?php print $title ?></a><br />
<div id="fachartikel-hinweiskasten">
 Artikel und Testberichte von 
 <a href="<?php print base_path()?>node/24">Dr. Burkhardt Schw&auml;be</a>, 
 erschienen in folgenden Zeitschriften:
</div>
</div>

<div id="fachartikel-rechts">
 <h2><?php print $title ?></h2>
<?php print $field_fachartikel_haupttext[0]['view']?>
<div id="fachartikel-titelseite">
 <a target="blank" href="<?php print base_path() . $field_fachartikel_pdf_artikel[0]['filepath']?>"><?php print $field_fachartikel_titelseite[0]['view']?></a>
</div>

</div>
<div class="cleardiv"></div>
</div>

<!-- Block unten fuer Navigation-Views -->

<div id="fachartikel-unten">
 <div id="fachartikel-unten-links">
  <?php print $fachartikel_navi_links ?>
 </div>
 <div id="fachartikel-unten-rechts">
  <?php print $fachartikel_navi_rechts ?>
 </div>
 <div class="cleardiv"></div>
</div>

