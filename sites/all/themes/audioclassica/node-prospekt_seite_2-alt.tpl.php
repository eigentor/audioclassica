<div id="prospekt-2-haupttext">
<div id="prospekt-2-weitere-produktbilder">
 <?php print $field_weitere_produktbilder[0]['view'] ?>
 <?php print $field_weitere_produktbilder[1]['view'] ?>
 <?php print $field_weitere_produktbilder[2]['view'] ?>
 <?php print $field_weitere_produktbilder[3]['view'] ?>
 <div class="cleardiv"></div>
</div>
 <?php print $field_prospekt_2_haupttext[0]['view'] ?>
 <p class="prospekt-seiten-link">
 <?php print $field_link_zur_prospektseite_1[0]['view'] ?>
 </p>
<div class="cleardiv"></div>
</div>
<!-- Und hier die gigantische Tabellenkonstruktion -->

<!-- Tabelle Presse -->
<div id="prospekt-2-tabellen">
<?php if ($field_presseartikel_1_link) { ?> 

<table class="presseartikel-tabelle">
<tr>

<th class="erste" colspan="2"><?php print $field_titel_tabelle_presse[0]['view'] ?></th>

<!-- <?php if ($field_presseartikel_2_link) { ?>
  <th>&nbsp;</th>
  <?php };?> -->
  
  <?php if ($field_presseartikel_3_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_presseartikel_4_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_presseartikel_5_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_presseartikel_6_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_presseartikel_7_link) { ?>
  <th>&nbsp;</th>
  <?php };?>

</tr>
 <tr>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_1_link[0]['view'] ?>">
  <?php print $field_presseartikel_1_titel[0]['view'] ?></a>
  </td>
  
  <?php if ($field_presseartikel_2_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_2_link[0]['view'] ?>">
  <?php print $field_presseartikel_2_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_3_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_3_link[0]['view'] ?>">
  <?php print $field_presseartikel_3_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_4_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_4_link[0]['view'] ?>">
  <?php print $field_presseartikel_4_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_5_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_5_link[0]['view'] ?>">
  <?php print $field_presseartikel_5_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_6_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_6_link[0]['view'] ?>">
  <?php print $field_presseartikel_6_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_7_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_presseartikel_7_link[0]['view'] ?>">
  <?php print $field_presseartikel_7_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  </tr>
  <tr>
  
  <td class="presse-bild">
  <a target="_blank" href="<?php print $field_presseartikel_1_link[0]['view'] ?>"> 
   <?php print $field_presseartikel_1_bild[0]['view'] ?> 
   </a>
   </td>
   
   <?php if ($field_presseartikel_2_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_2_link[0]['view'] ?>">
      <?php print $field_presseartikel_2_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_3_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_3_link[0]['view'] ?>">
      <?php print $field_presseartikel_3_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_4_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_4_link[0]['view'] ?>">
      <?php print $field_presseartikel_4_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_5_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_5_link[0]['view'] ?>">
      <?php print $field_presseartikel_5_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_6_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_6_link[0]['view'] ?>">
      <?php print $field_presseartikel_6_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_presseartikel_7_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_presseartikel_7_link[0]['view'] ?>">
      <?php print $field_presseartikel_7_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  
  
  </tr>
</table>

<?php if ($field_presseartikel_8_bild[0]['filepath']) { ?>
<table class="presseartikel-tabelle">
<tr>
<?php if ($field_presseartikel_8_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_presseartikel_8_datei[0]['filename']) {
print base_path() . $field_presseartikel_8_datei[0]['filepath'];}?>
<?php print $field_presseartikel_8_weblink[0]['view']?>
">
<?php print $field_presseartikel_8_titel[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_9_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_presseartikel_9_datei[0]['filename']) {
print base_path() . $field_presseartikel_9_datei[0]['filepath'];}?>
<?php print $field_presseartikel_9_weblink[0]['view']?>
">
<?php print $field_presseartikel_9_titel[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_10_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_presseartikel_10_datei[0]['filename']) {
print base_path() . $field_presseartikel_10_datei[0]['filepath'];}?>
<?php print $field_presseartikel_10_weblink[0]['view']?>
">
<?php print $field_presseartikel_10_titel[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_11_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_presseartikel_11_datei[0]['filename']) {
print base_path() . $field_presseartikel_11_datei[0]['filepath'];}?>
<?php print $field_presseartikel_11_weblink[0]['view']?>
">
<?php print $field_presseartikel_11_titel[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_12_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_presseartikel_12_datei[0]['filename']) {
print base_path() . $field_presseartikel_12_datei[0]['filepath'];}?>
<?php print $field_presseartikel_12_weblink[0]['view']?>
">
<?php print $field_presseartikel_12_titel[0]['view'] ?>
</a>
</td>
<?php };?>
</tr>
<tr>
<?php if ($field_presseartikel_8_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="_blank" href="
<?php if($field_presseartikel_8_datei[0]['filename']) {
print base_path() . $field_presseartikel_8_datei[0]['filepath'];}?>
<?php print $field_presseartikel_8_weblink[0]['view']?>
">
<?php print $field_presseartikel_8_bild[0]['view'] ?>
</td>
<?php };?>
<?php if ($field_presseartikel_9_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="blank" href="
<?php if($field_presseartikel_9_datei[0]['filename']) {
print base_path() . $field_presseartikel_9_datei[0]['filepath'];}?>
<?php print $field_presseartikel_9_weblink[0]['view']?>
">
<?php print $field_presseartikel_9_bild[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_10_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="blank" href="
<?php if($field_presseartikel_10_datei[0]['filename']) {
print base_path() . $field_presseartikel_10_datei[0]['filepath'];}?>
<?php print $field_presseartikel_10_weblink[0]['view']?>
">
<?php print $field_presseartikel_10_bild[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_11_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="blank" href="
<?php if($field_presseartikel_11_datei[0]['filename']) {
print base_path() . $field_presseartikel_11_datei[0]['filepath'];}?>
<?php print $field_presseartikel_11_weblink[0]['view']?>
">
<?php print $field_presseartikel_11_bild[0]['view'] ?>
</a>
</td>
<?php };?>
<?php if ($field_presseartikel_12_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="blank" href="
<?php if($field_presseartikel_12_datei[0]['filename']) {
print base_path() . $field_presseartikel_12_datei[0]['filepath'];}?>
<?php print $field_presseartikel_12_weblink[0]['view']?>
">
<?php print $field_presseartikel_12_bild[0]['view'] ?>
</a>
</td>
<?php };?>
</tr>
</table>
<?php };?>


<?php };?> 
</div>

<!-- Tabelle Produktinfos -->

<?php if ($field_infomaterial_1_link) { ?> 

<table class="presseartikel-tabelle">
<tr>

<th class="erste" colspan="2"><?php print $field_titel_tabelle_infomateria[0]['view'] ?></th>

<!-- <?php if ($field_infomaterial_2_link) { ?>
  <th>&nbsp;</th>
  <?php };?> -->
  
  <?php if ($field_infomaterial_3_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_infomaterial_5_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_infomaterial_5_link) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_infomaterial_6_bild[0]['filepath']) { ?>
  <th>&nbsp;</th>
  <?php };?>
  
  <?php if ($field_infomaterial_7_bild[0]['filepath']) { ?>
  <th>&nbsp;</th>
  <?php };?>

</tr>
 <tr>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_infomaterial_1_link[0]['view'] ?>">
  <?php print $field_infomaterial_1_titel[0]['view'] ?></a>
  </td>
  
   <?php if ($field_infomaterial_6_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_infomaterial_6_datei[0]['filename']) {
print base_path() . $field_infomaterial_6_datei[0]['filepath'];}?>
<?php print $field_infomaterial_6_weblink[0]['view']?>
">
<?php print $field_infomaterial_6_titel[0]['view'] ?>
</a>
</td>
<?php };?>
  
  <?php if ($field_infomaterial_2_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_infomaterial_2_link[0]['view'] ?>">
  <?php print $field_infomaterial_2_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  <?php if ($field_infomaterial_3_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_infomaterial_3_link[0]['view'] ?>">
  <?php print $field_infomaterial_3_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
  
  <?php if ($field_infomaterial_4_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_infomaterial_4_link[0]['view'] ?>">
  <?php print $field_infomaterial_4_titel[0]['view'] ?></a>
  </td> 
  <?php };?>
  
  <?php if ($field_infomaterial_5_link) { ?>
  <td class="presse-titel">
  <a target="_blank" href="<?php print $field_infomaterial_5_link[0]['view'] ?>">
  <?php print $field_infomaterial_5_titel[0]['view'] ?></a>
  </td>
  <?php };?>
  
 
   
  <?php if ($field_infomaterial_7_bild[0]['filepath']) { ?>
<td class="presse-titel">
<a target="blank" href="
<?php if($field_infomaterial_7_datei[0]['filename']) {
print base_path() . $field_infomaterial_7_datei[0]['filepath'];}?>
<?php print $field_infomaterial_7_weblink[0]['view']?>
">
<?php print $field_infomaterial_7_titel[0]['view'] ?>
</a>
</td>
<?php };?>
  
  </tr>
  <tr>
  
  <td class="presse-bild">
  <a target="_blank" href="<?php print $field_infomaterial_1_link[0]['view'] ?>"> 
   <?php print $field_infomaterial_1_bild[0]['view'] ?> 
   </a>
   </td>
   <?php if ($field_infomaterial_6_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="_blank" href="
<?php if($field_infomaterial_6_datei[0]['filename']) {
print base_path() . $field_infomaterial_6_datei[0]['filepath'];}?>
<?php print $field_infomaterial_6_weblink[0]['view']?>
">
<?php print $field_infomaterial_6_bild[0]['view'] ?>
</td>
<?php };?>
   
   <?php if ($field_infomaterial_2_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_infomaterial_2_link[0]['view'] ?>">
      <?php print $field_infomaterial_2_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_infomaterial_3_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_infomaterial_3_link[0]['view'] ?>">
      <?php print $field_infomaterial_3_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_infomaterial_5_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_infomaterial_4_link[0]['view'] ?>">
      <?php print $field_infomaterial_4_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  <?php if ($field_infomaterial_5_link) { ?>
  <td class="presse-bild">
    <a target="_blank" href="<?php print $field_infomaterial_5_link[0]['view'] ?>">
      <?php print $field_infomaterial_5_bild[0]['view'] ?>
    </a>
  </td>
  <?php };?>
  
  
  
  <?php if ($field_infomaterial_7_bild[0]['filepath']) { ?>
<td class="presse-bild">
<a target="_blank" href="
<?php if($field_infomaterial_7_datei[0]['filename']) {
print base_path() . $field_infomaterial_7_datei[0]['filepath'];}?>
<?php print $field_infomaterial_7_weblink[0]['view']?>
">
<?php print $field_infomaterial_7_bild[0]['view'] ?>
</td>
<?php };?>  
  
  </tr>
</table>
<?php };?>
