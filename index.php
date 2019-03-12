<?php
include "programacion.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <p class="estilo01">Uno</p>
        <p style="background: yellow; font-size: 25px">Dos</p>
        <p class="estilo02">Tres</p>
            
        <?php
        require "resultado.php";
        
        
        
        // put your code here
        $A=10;
        $a=10;
        $a++;
        $hello= "Hola DUOC";
        echo "Saludo $hello x $A y $a";
        echo "<br>";
        echo 'Salduo $hello x $A y $a';
        
        echo "<br>";
        
        $dia["Lunes"]="1 clase";
        $dia["Martes"]="2 clase";
        $dia["Miercoles"]="4 clase";
        $dia["Jueves"]="4 clase";
        $dia["Viernes"]="5 clase";
         
        echo "<br>";
        
        foreach ($dia as $value) {
            echo $value ."<br>";
        }
        ?>
    </body>
</html>
