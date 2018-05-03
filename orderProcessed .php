<?php

session_start();

 ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
         <html xmlns="http://www.w3.org/1999/xhtml">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>PaperWritersltd.com | Order</title>


        <link rel="stylesheet" type="text/css" href="https://mypaperwriters.net/application/views/pc/css/default.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link type="text/css" href="https://mypaperwriters.net/application/views/css/jquery-ui.min.css" rel="stylesheet" />
        <link type="text/css" href="https://mypaperwriters.net/application/views/css/validationEngine-2.6.2.jquery.css" rel="stylesheet" />
        <link rel="stylesheet" id="vector-icons-css" href="https://mypaperwriters.net/application/views/pc/css/css/font-awesome.css" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="https://mypaperwriters.net/application/views/pc/css/menustyles.css" />
        <link rel="stylesheet" href="https://mypaperwriters.net/application/views/css/styles.css">
         <link href="pcss/bootstrap.min.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/font-awesome.min.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/animate.min.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/owl.carousel.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/owl.transitions.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/prettyPhoto.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/main.css" rel="stylesheet">
            <link href="https://paperwritersltd.com/pcss/responsive.css" rel="stylesheet">
            <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
            <![endif]-->       
            <link rel="shortcut icon" href="https://paperwritersltd.com/pimages/logo.png">
            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-144-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-114-precomposed.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://paperwritersltd.com/pimages/ico/apple-touch-icon-72-precomposed.png">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<style>
    body {
    background-color: #f7dab7 !important;
}

.container-fluid{
    width: 50%!important;
    height: 100% !important;
    align:justify !important;
    margin-left: 350px !important;
    margin-top: 250px !important;
}



</style>

 <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="https://paperwritersltd.com/pimages/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="https://paperwritersltd.com/">Home</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/about/">About</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/how-it-works/">How it works</a></li>
                        <li class="scroll"><a href="https://https://paperwritersltd.com/dtestimonials/">Testimonials</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/dservices/">Services</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/paperdetails.php">Order</a></li>
                        <li class="scroll"><a href="https://paperwritersltd.com/contact-2/">Contact</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
<div>
    <section>
        <div class="container-fluid">
            <table class="prices-table lowest-prices-table" width=80% >
                <tr>
                    <td colspan="2"><center>Order Summary</center></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $_SESSION["ssname"] ; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $_SESSION["ssemail"] ; ?></td>
                </tr>
                <tr>
                    <td>Phone No</td>
                    <td><?php echo $_SESSION["ssphone"] ; ?></td>
                </tr>                
                <tr>
                    <td>Book Title</td>
                    <td><?php echo $_SESSION["sstitle"] ; ?></td>
                </tr>
                <tr>
                    <td>Discounted Price</td>
                    <td><?php echo $_SESSION["ssprice"]  ; ?></td>
                </tr>
                <tr>
                    <td>Transaction ReferenceID</td>
                    <td><?php echo $_SESSION["referenceId"] ; ?></td>
                </tr>
                <tr>
                    <td colspan="2">Pay with QuickTeller</td>
                </tr>                             
                   <?php
                       $_SESSION["ssprice"] = $_SESSION["ssprice"] * 100;
                   ?>                             
            </table>
            <p><em><small><a id="04339101" class="quickteller-checkout-anchor" style="text-align: left;"></a></small></em></p><script>// <![CDATA[
            var QTCheckout = QTCheckout || {};
            var testMode = false;
            var baseUrl = "";
            QTCheckout.paymentItems = QTCheckout.paymentItems || [];
            QTCheckout.paymentItems.push({
            paymentCode: '04339101',
            extraData: {
            amount:<?php echo $_SESSION["ssprice"]; ?>,
            buttonSize: 'medium',
            customerId:'paperwritersltd.com',
            mobileNumber:<?php echo $_SESSION["ssphone"]; ?>,
            emailAddress:'<?php echo $_SESSION["ssemail"]; ?>',
            redirectUrl: "Default",
            requestReference:"6138<?php echo $_SESSION["referenceId"]; ?>"
            }
            });

            if (testMode == true) baseUrl = "https://pwq.sandbox.interswitchng.com/scripts/quickteller-checkout-min.js?v=";
            else baseUrl = "https://paywith.quickteller.com/scripts/quickteller-checkout-min.js?v=";
            if (!QTCheckout.qtScript) {
            var qtScript = document.createElement('script');
            qtScript.type = 'text/javascript';
            qtScript.async = true;
            qtScript.src = baseUrl + new Date().getDay();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(qtScript, s);
            QTCheckout.qtScript = qtScript;
            }
            else if (QTCheckout.buildPaymentItemsUI) {
            QTCheckout.buildPaymentItemsUI();
            }
            // ]]></script>
            
    <?php 
            // remove all session variables
        //    session_unset(); 

            // destroy the session 
            //session_destroy(); 
             ?> 
        </div>
    </section>

<!--     <script type="text/javascript">
        function Print() {
            document.getElementById("price").value;
            document.getElementById("phone_number").value;
            document.getElementById("email").value;
        }
    </script>  -->
    </body>
</html>