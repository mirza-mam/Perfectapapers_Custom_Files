<head>
    <meta charset="utf-8">
    <script src="https://js.braintreegateway.com/web/dropin/1.25.0/js/dropin.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.70.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.70.0/js/data-collector.min.js"></script>

</head>


<style>
    .button {
        cursor: pointer;
        font-weight: 500;
        left: 3px;
        line-height: inherit;
        position: relative;
        text-decoration: none;
        text-align: center;
        border-style: solid;
        border-width: 1px;
        border-radius: 3px;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: inline-block;
    }

    .button--small {
        padding: 10px 20px;
        font-size: 0.875rem;
    }

    .button--green {
        outline: none;
        background-color: #64d18a;
        border-color: #64d18a;
        color: white;
        transition: all 200ms ease;
    }

    .button--green:hover {
        background-color: #8bdda8;
        color: white;
    }
</style>

<body>
    <!-- Step one: add an empty container to your page -->
    <form id="payment-form" action="generateToken.php" method="post">
        <!-- Putting the empty container you plan to pass to
      `braintree.dropin.create` inside a form will make layout and flow
      easier to manage -->
        <div id="dropin-container"></div>
        <!-- <input type="submit" /> -->
        <button type="submit" id="submit-button" class="button button--small button--green">Purchase</button>
        <input type="hidden" id="nonce" name="payment_method_nonce" />
    </form>



    <script type="text/javascript">
        // var button = document.querySelector('#submit-button');

        /* braintree.dropin.create({
            authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
            selector: '#dropin-container'
        }, function(err, instance) {
            button.addEventListener('click', function() {
                instance.requestPaymentMethod(function(err, payload) {
                    // Submit payload.nonce to your server
                });
            })
        }); */

        const form = document.getElementById('payment-form');

        braintree.dropin.create({
            authorization: 'eyJ2ZXJzaW9uIjoyLCJhdXRob3JpemF0aW9uRmluZ2VycHJpbnQiOiJleUowZVhBaU9pSktWMVFpTENKaGJHY2lPaUpGVXpJMU5pSXNJbXRwWkNJNklqSXdNVGd3TkRJMk1UWXRjMkZ1WkdKdmVDSXNJbWx6Y3lJNkltaDBkSEJ6T2k4dllYQnBMbk5oYm1SaWIzZ3VZbkpoYVc1MGNtVmxaMkYwWlhkaGVTNWpiMjBpZlEuZXlKbGVIQWlPakUyTURrNU5URTFOVGtzSW1wMGFTSTZJalEyWkRaaE56WTVMVGRpWXpRdE5EVm1NaTFoWTJKa0xXUm1aREJrTnpSbE9UazBZU0lzSW5OMVlpSTZJamsyYTNFeWMySTRkMk53ZGpWcU9Ia2lMQ0pwYzNNaU9pSm9kSFJ3Y3pvdkwyRndhUzV6WVc1a1ltOTRMbUp5WVdsdWRISmxaV2RoZEdWM1lYa3VZMjl0SWl3aWJXVnlZMmhoYm5RaU9uc2ljSFZpYkdsalgybGtJam9pT1RacmNUSnpZamgzWTNCMk5XbzRlU0lzSW5abGNtbG1lVjlqWVhKa1gySjVYMlJsWm1GMWJIUWlPbVpoYkhObGZTd2ljbWxuYUhSeklqcGJJbTFoYm1GblpWOTJZWFZzZENKZExDSnpZMjl3WlNJNld5SkNjbUZwYm5SeVpXVTZWbUYxYkhRaVhTd2liM0IwYVc5dWN5STZlMzE5LkNBWDdvdnRJcDhYS3lfTk5acU5QWUFJdGVaT2p2ZmhxWGhqYVZLejhBdUdhNkxkbmc1NWZseE4zUXpTdUpRUi1pR3ZSMkVGRnZGbEcwdHU0amhHdERnIiwiY29uZmlnVXJsIjoiaHR0cHM6Ly9hcGkuc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbTo0NDMvbWVyY2hhbnRzLzk2a3Eyc2I4d2NwdjVqOHkvY2xpZW50X2FwaS92MS9jb25maWd1cmF0aW9uIiwiZ3JhcGhRTCI6eyJ1cmwiOiJodHRwczovL3BheW1lbnRzLnNhbmRib3guYnJhaW50cmVlLWFwaS5jb20vZ3JhcGhxbCIsImRhdGUiOiIyMDE4LTA1LTA4IiwiZmVhdHVyZXMiOlsidG9rZW5pemVfY3JlZGl0X2NhcmRzIl19LCJjbGllbnRBcGlVcmwiOiJodHRwczovL2FwaS5zYW5kYm94LmJyYWludHJlZWdhdGV3YXkuY29tOjQ0My9tZXJjaGFudHMvOTZrcTJzYjh3Y3B2NWo4eS9jbGllbnRfYXBpIiwiZW52aXJvbm1lbnQiOiJzYW5kYm94IiwibWVyY2hhbnRJZCI6Ijk2a3Eyc2I4d2NwdjVqOHkiLCJhc3NldHNVcmwiOiJodHRwczovL2Fzc2V0cy5icmFpbnRyZWVnYXRld2F5LmNvbSIsImF1dGhVcmwiOiJodHRwczovL2F1dGgudmVubW8uc2FuZGJveC5icmFpbnRyZWVnYXRld2F5LmNvbSIsInZlbm1vIjoib2ZmIiwiY2hhbGxlbmdlcyI6W10sInRocmVlRFNlY3VyZUVuYWJsZWQiOnRydWUsImFuYWx5dGljcyI6eyJ1cmwiOiJodHRwczovL29yaWdpbi1hbmFseXRpY3Mtc2FuZC5zYW5kYm94LmJyYWludHJlZS1hcGkuY29tLzk2a3Eyc2I4d2NwdjVqOHkifSwicGF5cGFsRW5hYmxlZCI6dHJ1ZSwicGF5cGFsIjp7ImJpbGxpbmdBZ3JlZW1lbnRzRW5hYmxlZCI6dHJ1ZSwiZW52aXJvbm1lbnROb05ldHdvcmsiOnRydWUsInVudmV0dGVkTWVyY2hhbnQiOmZhbHNlLCJhbGxvd0h0dHAiOnRydWUsImRpc3BsYXlOYW1lIjoiUGVyZmVjdGFwYXBlcnMiLCJjbGllbnRJZCI6bnVsbCwicHJpdmFjeVVybCI6Imh0dHA6Ly9leGFtcGxlLmNvbS9wcCIsInVzZXJBZ3JlZW1lbnRVcmwiOiJodHRwOi8vZXhhbXBsZS5jb20vdG9zIiwiYmFzZVVybCI6Imh0dHBzOi8vYXNzZXRzLmJyYWludHJlZWdhdGV3YXkuY29tIiwiYXNzZXRzVXJsIjoiaHR0cHM6Ly9jaGVja291dC5wYXlwYWwuY29tIiwiZGlyZWN0QmFzZVVybCI6bnVsbCwiZW52aXJvbm1lbnQiOiJvZmZsaW5lIiwiYnJhaW50cmVlQ2xpZW50SWQiOiJtYXN0ZXJjbGllbnQzIiwibWVyY2hhbnRBY2NvdW50SWQiOiJwZXJmZWN0YXBhcGVycyIsImN1cnJlbmN5SXNvQ29kZSI6IkVVUiJ9fQ==',
            container: '#dropin-container'
        }).then((dropinInstance) => {
            form.addEventListener('submit', (event) => {
                event.preventDefault();

                dropinInstance.requestPaymentMethod().then((payload) => {
                    // Step four: when the user is ready to complete their
                    //   transaction, use the dropinInstance to get a payment
                    //   method nonce for the user's selected payment method, then add
                    //   it a the hidden field before submitting the complete form to
                    //   a server-side integration
                    document.getElementById('nonce').value = payload.nonce;

                    // return braintree.dataCollector.create({
                //     client: clientInstance,
                //     paypal: true
                // }).then(function(dataCollectorInstance) {
                //     // At this point, you should access the dataCollectorInstance.deviceData value and provide it
                //     // to your server, e.g. by injecting it into your form as a hidden input.
                //     var deviceData = dataCollectorInstance.deviceData;
                // });
                
                    form.submit();
                }).catch((error) => {
                    throw error;
                });

            });
        }).catch((error) => {
            // handle errors
        });

/* 
        braintree.client.create({
            authorization: 'CLIENT_AUTHORIZATION'
        }).then(function(clientInstance) {
            // Creation of any other components...

            return braintree.dataCollector.create({
                client: clientInstance,
                paypal: true
            }).then(function(dataCollectorInstance) {
                // At this point, you should access the dataCollectorInstance.deviceData value and provide it
                // to your server, e.g. by injecting it into your form as a hidden input.
                var deviceData = dataCollectorInstance.deviceData;
            });
        }).catch(function(err) {
            // Handle error in creation of components
        }); */
    </script>
</body>