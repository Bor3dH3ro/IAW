<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        function saludo() {
        echo '<div>Encantado de conocerte, ';
        }
        $nombre1 = 'Alejandro';
        saludo();
        echo $nombre1 , '</div>';
        $nombre2 = 'Patricia';
        saludo();
        echo $nombre2 , '</div>';
    ?>
    <?php
        function saludar($nombre) {
        echo '<div>Encantado de conocerte, ',$nombre,'</div>';
        }
        saludar('Alejandro');
        saludar('Patricia');
    ?>
    
    <?php
        //Escribe un script que haga uso de una función para generar salidas 
        //como la siguiente a partir delnombre de una persona, su lugar y año de nacimiento:
        function nacimiento($nombre,$ciudad,$nacer) {
            echo $nombre,' nació en ', $ciudad, ' en el año ', $nacer;
        }
        nacimiento('Alejandro', 'Madrid',2000)
    ?>


</html>
