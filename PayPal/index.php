<?php
echo $_GET['amt'];
?>
<html>

<head>
  <title>Paypal</title>
  <link rel="shortcut icon" href="paypal-icon-logo.svg" type="image/x-icon">
</head>
<style>

</style>

<body>

  <div id="smart-button-container" style='width:300px; margin:80 auto;'>
    <h4>
      <center><b>Checkout</b></center>
    </h4>
    <hr>
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>

  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              "amount": {
                "currency_code": "USD",
                "value": "<?php echo $_GET['amt'] ?>"
              }
            }]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');

          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
</body>

</html>