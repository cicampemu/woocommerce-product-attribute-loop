<?php

// This code is for the file content-single-product.php in the WordPress repository your-WP-theme/woocommerce/.

//creates a new function to get and output product attribute from database.
function woocommerce_extra_informatie() {
  
  global $product;
  
  //desribes all the types of array delimiters for the product parameters.
  $arrDelimiters = array("/", ",");
  
  //gets the size parameters of the product in the Woocommerce database.
  $size = $product->get_attribute( 'pa_size' );
  
  //replace and uniformize all array delimiters to -|-. 
  $uniformArr = str_replace($arrDelimiters, "-|-", $size);
  
  //explodes the size parameter array
  $sizes = explode("-|-", $uniformArr);

    if (!empty($size)){    
      
      //outputs the product attribute in a loop.
      foreach ($sizes as $value){   
      
      //you can put HTML here.
      echo $value;

      }
}

//hook function woocommerce_extra_informatie onto woocommerce_single_product_summary
add_action( 'woocommerce_single_product_summary', 'woocommerce_extra_informatie', 20 );					
do_action( 'woocommerce_single_product_summary' );
