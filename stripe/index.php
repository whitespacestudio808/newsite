<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Stripe Payment Gateway</title>
	<style>.container{padding: 20px;}</style>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		//set your publishable key
		Stripe.setPublishableKey('pk_test_0QaVw6GuSFxosJPb6wz4d0VH');

    //callback to handle the response from stripe
    function stripeResponseHandler(status, response) {
        if (response.error) {
            //enable the submit button
            $('#payBtn').removeAttr("disabled");
            //display the errors on the form
            $(".payment-status").html(response.error.message);
        } else {
            var form$ = $("#paymentFrm");
            //get token id
            var token = response['id'];
            //insert the token into the form
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            
            $.ajax({
                type:'POST',
                url:'submit.php',
                data:$('#paymentFrm').serialize()+'&card_submit=1',
                beforeSend: function(){
                    $('#payBtn').prop('disabled', true);
                    $('#paymentFrm').css('opacity', '.5');
                },
                success:function(msg){
                    if(msg == 'trr'){
                        $(".payment-status").html('<span style="color:red;">Transaction has been failed.</span>');
                    }else if(msg == 'err'){
                        $(".payment-status").html('<span style="color:red;">Some problem occurred, please try again.</span>');
                    }else if(msg == 'frr'){
                        $(".payment-status").html('<span style="color:red;">Form submission error.......</span>');
                    }else{
                        $('.name').val('');
                        $('.email').val('');
                        $('.card-number').val('');
                        $('.card-expiry-month').val('');
                        $('.card-expiry-year').val('');
                        $('.card-cvc').val('');
                        $(".payment-status").html('<span style="color:green;">Your payment was successful. TXN ID: '+msg+'</span>');
                    }
                    $('#payBtn').prop('disabled', false);
                    $('#paymentFrm').css('opacity', '');
                }
            });
            //submit form to the server
            //form$.get(0).submit();
        }
    }
    $(document).ready(function() {
        //on form submit
        $("#paymentFrm").submit(function(event) {
            //disable the submit button to prevent repeated clicks
            $('#payBtn').attr("disabled", "disabled");
            $('#paymentFrm').css('opacity', '.5');
            
            //create single-use token to charge the user
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            
            //submit from callback
            return false;
        });
    });


		
/*
		//callback to handle the response from stripe
		function stripeResponseHandler(status, response) {
			if (response.error) {
				//enable the submit button
				$('#payBtn').removeAttr("disabled");
				//display the errors on the form
				$(".payment-errors").html(response.error.message);
			} else {
				var form$ = $("#paymentFrm");
				//get token id
				var token = response['id'];
				//insert the token into the form
				form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
				//submit form to the server
				form$.get(0).submit();
			}
		}
		$(document).ready(function() {
			//on form submit
			$("#paymentFrm").submit(function(event) {
				//disable the submit button to prevent repeated clicks
				$('#payBtn').attr("disabled", "disabled");
				
				//create single-use token to charge the user
				Stripe.createToken({
					number: $('.card-number').val(),
					cvc: $('.card-cvc').val(),
					exp_month: $('.card-expiry-month').val(),
					exp_year: $('.card-expiry-year').val()
				}, stripeResponseHandler);
				
				//submit from callback
				return false;
			});
		});
*/
	</script>
</head>
<body>
<div class="container">
<h1>Charge $12 with Stripe</h1>
<!-- display errors returned by createToken -->
<span class="payment-errors"></span>

<form action="submit.php" method="POST" id="paymentFrm">
	<p>
		<label>Name1</label>
		<input type="text" name="name" size="50" value="Andy B" />
	</p>
	<p>
		<label>Email</label>
		<input type="text" name="email" size="50" value="andyb.amy@gmail.com" />
	</p>
	<p>
		<label>Card Number</label>
		<input type="text" name="card_num" size="20" autocomplete="off" class="card-number" value="4242424242424242" />
	</p>
	<p>
		<label>CVC</label>
		<input type="text" name="cvc" size="4" autocomplete="off" class="card-cvc" value="123" />
	</p>
	<p>
		<label>Expiration (MM/YYYY)</label>
		<input type="text" name="exp_month" size="2" class="card-expiry-month"/>
		<span> / </span>
		<input type="text" name="exp_year" size="4" class="card-expiry-year"/>
	</p>
	<button type="submit" id="payBtn">Submit Payment</button>
</form>
</div>
</body>
</html>