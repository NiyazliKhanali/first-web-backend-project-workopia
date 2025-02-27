<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

 function basePath($path = ''){
    return __DIR__ . '/' . $path;
 }

 /**
  * 
  * Load the views
  *
  *@param string $name
  *@return void
  */

  function loadViews($name){
   require basePath("views/{$name}.view.php");
  }

  /**
   * Load the partials
   * 
   * @param string $name
   * @return void 
   */

   function loadPartials($name){
      require basePath("views/partials/{$name}.php");
   }