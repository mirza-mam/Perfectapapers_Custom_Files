paypal.Buttons({ 
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: amount
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details);
            window.location.replace(`${baseUrl}/paypal.php?paypal_id=${details.id}&payer_id=${details.payer.payer_id}&payer_email=${details.payer.email_address}&payer_name=${details.payer.name.given_name}&amounts=${details.purchase_units[0].amount.value}&merchant_id=${details.purchase_units[0].payee.merchant_id}&merchant_email=${details.purchase_units[0].payee.email_address}`)
        })
    },
    onCancel: function (data) {
        // window.location.replace(`${baseUrl}/Oncancel.php`)
    }
}).render('#paypal-payment-button');