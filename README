Quick quide
===========

-   Install Shopping Cart
-   Install Orders Management
-   Add field sc_price to your product template (any template will do!)
-   Add echo $modules->get("ShopCart")->renderAddToCart($page); to your product template (or write your own form markup)
-   Create template file called "sc-checkout.php"
-   Add this line to your newly created checkout tempalte: echo $modules->get("ShopCheckout")->renderCheckout();
-   Add prices to your products and it should work
-   Remember this is a work in progress and if it works, it ain't complete

Few tips
--------

If you want to build tiny shopping cart to show current status you probably need these to functions:
echo $modules->get("ShopCart")->getTotalSumFromCart();
echo $modules->get("ShopCart")->getNumberOfItems();

PS: getNumberOfItems returns different items. So if you have 10*ProductA and 4*ProductB it will return 2