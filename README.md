1.  Install Shopping Cart
2.  Add sc_price field to your product template (can be added into multiple templates)
3.  Edit few of your products and give them price
4.  Add <?php echo $modules->get("ShoppingCart")->renderAddToCart(); ?> to your product template. If you don't like the markup it generates, you can put the wanted markup directly into template.
5.  At this point you can add products to your cart. If you want to show somewhere how many products there is in your cart, do this in your template:
echo $modules->get('ShoppingCart')->getNumberOfItems(false); // Total number of items
or
echo $modules->get('ShoppingCart')->getNumberOfItems(); // Different items only, ie. qty doesn't matter
6.  How about the actual cart page, where you can see all the products in your cart? Add this to any of your templates where you want to see it:
<?php echo $modules->get("ShoppingCart")->renderCart() ?>
This is starting to take shape. But there is no checkout at all? How to actually order something?
7.  Install Shopping Checkout module
8.  Now you see "Continue to checkout" under your renderCart() output. Clicking that would result in page not found error. Shopping Checkout module creates system template called sc-checkout. You need to create corresponding template file. So create sc-checkout.php to your /site/templates/ folder. Only code you need to put there is:
<?php echo $modules->get("ShoppingCheckout")->renderCheckout(); ?>
9.  If you need to customize the fields etc, you can do that in certain degree by editing the ShoppingCheckout module. Also, pw-shop is fully multilang, so you probably do want to translate the module files.
10.  Checkout doesn't let you go through unless you install at least one payment method. So do so if you want to continue.
11.  You might want to show checkout steps (kind of a breadcrumb). That is possible with yet another module. Just put this to your sc-checkout template:
<?php echo $modules->get("ShoppingStepsMarkup")->render(); ?>
12.  When someone orders something, you probably want to see those in your admin. That is what Shopping Orders Management module is for. Go ahead and install that also (it has basic functionality, but very much wip).

You find PayPal payment method module from here: https://github.com/apeisa/PaymentPaypal
