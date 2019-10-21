<?php require('php_config/connect.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>exoPhone</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/abm.css">
	<link rel="stylesheet" href="css/cards.css">
	<link rel="stylesheet" href="css/nav.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

<?php
    include('include/nav.php');
?>

<div class="hero is-medium has-background">
        <img src="imagenes/slider2.jpg" alt="" class="hero-background">
        <div class="hero-body">
            <div class="container_hero">
              <h2 class="subtitle has-text-white">No estas seguro de que equipo elegir?</h2>
              <h1 class="title has-text-white">Responde 10 preguntas y <a class="has-text-grey-light"><strong>listo</strong></a>!</h1>
            </div>
        </div>

</div>

<section class="section">

    <div class="tabs is-toggle" id="tabs">
        <ul>
            <li class="is-active" data-tab="1"><a>Pregunta 1</a></li>
            <li data-tab="2"><a>Pregunta 2</a></li>
            <li data-tab="3"><a>Pregunta 3</a></li>
            <li data-tab="4"><a>Pregunta 4</a></li>
            <li data-tab="5"><a>Pregunta 5</a></li>
            <li data-tab="6"><a>Pregunta 6</a></li>
            <li data-tab="7"><a>Pregunta 7</a></li>
            <li data-tab="8"><a>Pregunta 8</a></li>
            <li data-tab="9"><a>Pregunta 9</a></li>
            <li data-tab="10"><a>Pregunta 10</a></li>
        </ul>
    </div>
    <div class="box">
        <div class="columns is-multiline is-centered" style="overflow: auto; max-height: 100%;">
            
            <?php
                include('php_include/getSmartForm.php');
            ?>
            
        

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="js/nav.js"></script>

</body>
</html>

<?php


     if(isset($_POST['guess'])){

        $response = [$_POST['p1'], $_POST['p2'], $_POST['p3'], $_POST['p4'], $_POST['p5'], $_POST['p6'], $_POST['p7'], $_POST['p8'], $_POST['p9'], $_POST['p10'] ];

        print_r($response);



        //  $smartQuery= "SELECT p.id_product, p.id_dispositive, p.product_price, p.listed,
        //      d.disp_brand, d.disp_model, d.disp_pic,
             
        //      FROM products p

        //      LEFT JOIN dispositives d ON p.id_dispositive = d.id_dispositives
             
        //      WHERE p.listed = '1' AND ";





     }







?>