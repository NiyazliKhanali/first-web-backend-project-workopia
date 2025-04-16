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
 $loadView =  basePath("views/{$name}.view.php");
  
 if (file_exists($loadView)) {
    require $loadView;
} else {
    echo "View not found";
  }
}

/**
 * Load the partials
 * 
 * @param string $name
 * @return void 
 */

 function loadPartials($name){
  $loadPartial = basePath("views/partials/{$name}.php");
  if (file_exists($loadPartial)) {
    require $loadPartial;
  } else {
    echo "Partial not found";
}
 }


 /**
  * 
  * Inspect values
  *
  *@param mixed $value
  *@return void 
  */

function inspect($value){
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}
