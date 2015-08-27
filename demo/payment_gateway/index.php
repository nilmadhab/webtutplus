<!DOCTYPE html>
<html>
<head>
	<title>Webtut plus Integrate paypal </title>

	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
	<div class="container">
	<h1 class="bg-info" style="text-align:center"> Paypal Payment Gateway Intergation </h1>
	</div>
	<div class="container" style="margin-top:50px">

        <div class="col-sm-4">
            <img src="P1.jpg" width="200"><br>
           	<p> $100 </p>
           	<script src="paypal.min.js?merchant=contact.webtutplus@gmail.com" 

		    data-button="buynow"
		    data-name="My first product"
		    data-amount="100.00"
		    async
		></script>
           
        </div>

        <div class="col-sm-4">
            <img src="P2.jpg" width="200"><br>
           
            <br>
            <p> $200 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
		    data-button="buynow"
		    data-name="My second product"
		    data-amount="200.00"
		    async
		></script>
        </div>

        <div class="col-sm-4">
            <img src="P3.jpg" width="200"><br>
            <p> $300 </p>
            <script src="paypal.min.js?merchant=contact.webtutplus@gmail.com"
		    data-button="buynow"
		    data-name="My third product"
		    data-amount="300.00"
		    async
		></script>
          
    </div>
	


</body>
</html>

