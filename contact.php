<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Afin de former des dévelopeurs de qualité nous avons regrouper un Staff parmis les meilleurs de tout les coins du monde">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="Made By GN DESIGNS">



    <title>Contact YouCode</title>
    <link rel="stylesheet" type="text/css" href="assets/css/contactUtil.css">
	<link rel="stylesheet" type="text/css" href="assets/css/contac.css">


    
    <!-- // PLUGINS (css files) // -->

    <link href="assets/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="assets/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">


    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP //-->

    <link href="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- // Card, Card_responsive, CardHover & Main //-->
    <link rel="stylesheet" href="assets/css/recrutement.css">


    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link href="assets/css/popup.css" rel="stylesheet">
    <link href="assets/css/card.css" rel="stylesheet">
    <!-----------------------------------slide----------------------------------------->


    <!-------------------------------------fin slide--------------------------------------------->


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Oxygen|Roboto+Condensed|Teko|Yanone+Kaffeesatz"
        rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->



 
</head>
<style>
    nav {
        background: #000 !important;
    }
    .submited{
        min-height: 100vh;
    }
</style>



<body>



<?php 
    include('nav.php');
    ?>


    <!--============================================

        Aprenant

    ============================================-->
  
 <section class="contact">

 <?php
 
     
   if(isset($_POST['submit'])){
       $nom =$_POST['name'];
       $email=$_POST['email'];
       $email = str_replace(' ', '', $email);
       $message=$_POST['message'];
        $objet = $_POST['objet'];
       $message = $message .". L'email est envoier par " . $email ;
    ?>
    <div class="submited">
        <p>
        </p>
    </div>
    
    <?php
    if(mail("ahmedkhachia17@gmail.com",$objet ,$message,$nom)){    
        echo "hello word";
    }
      
   }
   else{
    include('contacter.php');

}
   
   ?>

</section>
  

    <!--========================================

           Footer

    ========================================-->

    <?php 
    include('footer.php');
    ?>

    <a href="#" class="go-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="assets/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>

<script src="assets/js/plugins/bootsnav_files/js/bootsnav.js"></script>

<script src="assets/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

<!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->

<script src="assets/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

<script src="assets/js/plugins/particles.js-master/particles.js-master/particles.min.js"></script>

<script src="assets/js/particales-script.js"></script>
<script src="assets/js/head.js"></script>

<script src="assets/js/main.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="assets/js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="assets/js/contact.js"></script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>


</body>



</html>