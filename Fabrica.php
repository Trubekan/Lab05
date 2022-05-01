<?php
       $numero1=$_POST['valor1'];
       $numero2=$_POST['valor2'];
       $nuevodesc=$numero1 * 0.05;
       $precionuevo=$numero1 - $nuevodesc;
       $compra= $precionuevo * $numero2;
       $descuento= $compra * 0.07;
       $pagar= $compra - $descuento;
       $obsequio= $numero2 * 2;
       echo "El nuevo precio es :" .$precionuevo ;
       echo "Su total a pagar sin 7% es : " . $compra;
       echo "Su descuento adicional de 7% es : " . $descuento;
       echo "Usted debe pagar : " . $pagar;
       echo "Su cantidad de caramelos gratis es : " . $obsequio;

?>
