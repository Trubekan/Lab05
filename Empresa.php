<?php
       $numero1=$_POST['valor1'];
       $numero2=$_POST['valor2'];
       $sueldo_basico=600;
       $bonificacion= $numero1 * 50;
       $comision= 0.0075 * $numero2;
       $sueldo_bruto= $sueldo_basico + $comision + $bonificacion;
       $descuento= $sueldo_bruto * 0.11;
       $sueldo_neto= $sueldo_bruto * $descuento;

       echo "Valor de bonificacion: " . $bonificacion;
       echo "Valor de comision: " . $comision;
       echo "Valor de descuento: " . $descuento;
       echo "Valor de sueldo basico: " . $sueldo_basico;
       echo "Valor de sueldo bruto: " . $sueldo_bruto;
       echo "Valor de sueldo neto: " . $sueldo_neto;
?>
