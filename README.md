Quick quide
===========

1.  Install Shopping Cart
2.  Install Orders Management
3.  Install PaymentExample
4.  Add field sc_price to your product template (any template will do!)
5.  Add echo $modules->get("ShoppingCart")->renderAddToCart($page); to your product template (or write your own form markup)
6.  Create template file called "sc-checkout.php"
7.  Add this line to your newly created checkout tempalte: echo $modules->get("ShoppingCheckout")->renderCheckout();
8.  Add prices to your products and it should work
9.  Remember this is a work in progress and if it works, it ain't complete

Few tips
--------

If you want to build tiny shopping cart to show current status you probably need these to functions:
echo $modules->get("ShopCart")->getTotalSumFromCart();
echo $modules->get("ShopCart")->getNumberOfItems();

PS: getNumberOfItems returns different items. So if you have 10*ProductA and 4*ProductB it will return 2