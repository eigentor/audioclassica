This module adds a simple .js aggregation to Drupal 5.x.

It increases the performance of your site with less server requests per pageload. Especially in shared hosting environments this can be a huge boost.

This approach requires NO core-patching.

Please download the official relaease for the most stable version.

It basically does the following:

    * takes the $scripts variable and removes .js files using a regular expression
    * generates a unique filename for any set of .js files
    * creates one file containing all .js files in files/js
    * returns a modified $srcipts variable with link to cached file 

To aggregate .js files

   1. enable the module
   2. go to admin/settings/performance and enable the js cache (you'll also find an option to clear js cache)
   3. place the following code inside your page.tpl.php file just before <?php print $scripts; ?> 

<?php
  if(module_exists('javascript_aggregator')) {
    $scripts = javascript_aggregator_cache($scripts);
  }
?>

Notice: function name changed, since version 5.x-0.1. Please update your page.tpl.php with new code above.

Comments welcome.

If you have suggestions, bugs, feature requests or if just like the module, you can create an issue.

Initial release was created for: http://routebook.com