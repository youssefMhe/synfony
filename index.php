<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Payments using Stripe</title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="images/ico/favicon.ico">	
</head>
<body>


<form action="payement.php" method="post" id="payment_form">
    
    <div class="field">
        <input type="text" name="name" >
    </div>
    <div class="field">
         <input type="email" name="email" >
    </div>
    
    <div class="field">
         <input type="text" placeholder="votre code de carte blue" data-stripe="number"  >
    </div>
    <div class="field">
         <input type="text" placeholder="MN" data-stripe="exp_month" >
    </div>
    <div class="field">
         <input type="text" placeholder="AA" data-stripe="exp_year" >
    </div>
    <div class="field">
         <input type="text" placeholder="code de verification" data-stripe="cvc"  >
    </div>
    
    <button class="ui button" type="submit">Payer</button>
    
</form>

<script type="text/javascript"  src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v6/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
    
    Stripe.setPublishableKey('pk_test_IBrdzUFOW45Y0Hu7VF5cqhOP');
    var $form = $('#payment_form')
    $form.submit(function(e){
        e.preventDefault()
        $form.find('button').attr('desabled',true)
        Stripe.card.createToken($form,function(status,response){
         
            if(response.error){
                $form.find('.message').remove();
                $form.prepend('<p>'+response.error.message+'</p>')
            }
            else{
               var token = response.id
               $form.append($('<input type="hidden" name="stripeToken">').val(token))
                $form.get(0).submit()
            }
        })
    })
    </script>






</body>
</html>