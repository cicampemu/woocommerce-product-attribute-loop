woocommerce-product-attribute-loop
==================================

Woocommerce Product Atrribute loop

This code snippet is for retrieving a product attribute (in this case the size attribute) from WordPress's Woocommerce database and output it on the product page of your WordPress/Woocommerce.

I created a new function woocommerce_extra_informatie() where I retrieve the product attribute array and explode it, and then output it in a foreach loop. Finally I hook this new function onto WP action's woocommerce_single_product_summary.
