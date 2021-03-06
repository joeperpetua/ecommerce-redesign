<!DOCTYPE html>
<html>
<head>
	<title>exoPhone</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="imagenes/icon-low.png" sizes="16x16">
	
	<link rel="stylesheet" href="css/mystyles.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/abm.css">
    <link rel="stylesheet" href="css/nav.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>

<section class="section">
    <a href="abm.php" class="button back">Volver a la lista </a>
    <hr>
    <div class="tabs is-toggle" id="tabs">
        <ul>
            <li class="is-active" data-tab="1"><a>Dispositivo</a></li>
            <li data-tab="2"><a>XPU</a></li>
            <li data-tab="3"><a>Memoria</a></li>
            <li data-tab="4"><a>Pantalla</a></li>
            <li data-tab="5"><a>Bateria</a></li>
            <li data-tab="6"><a>Conectividad</a></li>
            <li data-tab="7"><a>Extras</a></li>
            <li data-tab="8"><a>Camaras</a></li>
            <li data-tab="9"><a>Categoria</a></li>
            <li data-tab="10"><a>Producto</a></li>
        </ul>
    </div>
    <div class="box">
        <div class="columns is-multiline is-centered" style="overflow: auto; max-height: 100%;">
            
            <?php
                include('php_include/abm/getView.php');
            ?>
            
        

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

</body>
</html>

<?php mysqli_close($connection); ?>