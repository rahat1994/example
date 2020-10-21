<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get" id="payment-form">

<select name="session" id="session">
    <option value="summer">Summer</option>
    <option value="Autmn">Autmn</option>
    <option value="Spring">Spring</option>
</select>

<select name="paymentfor" id="paymentfor">
    <option value="tution_fee">tution fee</option>
    <option value="semister_fee">Semister fee</option>
    <option value="late_fee">Late fee</option>
</select>

<input type="text" name="amount" id="amount">

<input type="button" value="Add" id="add">
</form>



<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){

    $("#add").on('click', function(event){
        var session = $("#session").val();
        var paymentfor = $("#paymentfor").val();
        var amount = $("#amount").val();

        $("#payment-form").append('<input type="hidden" name="paymententry[]" value="'+session+'-'+ paymentfor+'-'+amount+'">');
    })
});

</script>

</body>
</html>
