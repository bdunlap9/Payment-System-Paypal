<html>
<title>Paypal</title>
<head>
<?php 
require __DIR__ . './config.php';
?>
</head>
<body>
    <div id="payment-box">
        <h4 class="txt-title">Weeke</h4>
        <div class="txt-price">$20</div>
        <form action="<?php if($sandbox) {
            echo "https://www.sandbox.paypal.com/cgi-bin/webscr";
        } else {
            echo "https://www.paypal.com/cgi-bin/webscr";
        } ?>"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='<?php echo $paypalEmail; ?>'> <input type='hidden'
                name='item_name' value='Rust RCS'> <input type='hidden'
                name='item_number' value='1'> <input type='hidden'
                name='amount' value='10'> <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='USD'> <input type='hidden'
                name='notify_url'
                value='<?php echo $url; ?>/notify.php'>
            <input type='hidden' name='cancel_return'
                value='<?php echo $url; ?>/cancel.php'>
            <input type='hidden' name='return'
                value='<?php echo $url; ?>/return.php'>
            <input type="hidden" name="cmd" value="_xclick"> <input
                type="submit" name="pay_now" id="pay_now"
                Value="Pay Now">
        </form>

    </div>
</body>
</html>