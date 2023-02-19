<?php 

    include_once "../controller/form.php";

    if(isset($_POST['Producto']) && strlen($_POST['Cantidad'])){

        $producto = $_POST['Producto'];
        $cantidad = $_POST['Cantidad'];

        $pHuevos = 3.50;
        $cereal = 1.75;
        $nutella = 3.45;
        $peras = 0.60;
        $papelH = 1.20;
        $cocaCola = 2.20;
        
        if($producto == 1){

            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de Paquetes de huevos y su total es <?php echo $cantidad * $pHuevos ?> $ </p> <?php

        }elseif( $producto == 2){
            
            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de cajas de cereal y su total es <?php echo $cantidad * $cereal ?> $ </p> <?php
        
        }elseif( $producto == 3){

            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de botes de nutella y su total es <?php echo $cantidad * $nutella ?> $ </p> <?php
        
        }elseif( $producto == 4){

            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de peras y su total es <?php echo $cantidad * $peras ?> </p> $ <?php
        
        }elseif( $producto == 5){

            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de papel higienico y su total es <?php echo $cantidad * $papelH ?> $ </p> <?php
        
        }elseif( $producto == 6){

            ?><p> El Cliente compro la cantidad de <?php echo $cantidad ?> de botellas de CocaCola 3L y su total es <?php echo $cantidad * $cocaCola ?> $ </p> <?php
        }

    }

