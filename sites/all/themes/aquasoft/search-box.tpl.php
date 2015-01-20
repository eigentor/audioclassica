<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td>
      <img src="<?php print base_path() . drupal_get_path('theme', 'aquasoft') .'/images/spotlight_left.gif' ?>" alt="" />
    </td>
    <td width="100%" class="searchbox">
      <input maxlength="128" name="search_block_form_keys" id="edit-search_block_form_keys" size="15" value=" Search" onclick="value=''" title="Enter the terms you wish to search for." class="form-text" type="text">
      <input type="hidden" name="form_token" id="edit-search-block-form-form-token" value="<?php print drupal_get_token('search_form'); ?>" />
      <input name="form_id" id="edit-search-theme-form" value="search_theme_form" type="hidden">
    </td>
    <td>
	<input name="op" value="Search" class="form-submit" type="image" src="<?php print base_path() . drupal_get_path('theme', 'aquasoft') .'/images/spotlight_clear.gif' ?>" alt="" />
    </td>
  </tr>
</table>