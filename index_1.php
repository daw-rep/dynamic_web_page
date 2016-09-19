<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function randomDecision()
        {
            return ((bool) rand(0, 1));
        }

        function rand_color()
        {
            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }

        $color = rand_color();
        echo "<p>Fíjate en esta página web</p>";
        if (randomDecision()) {
            
            echo "<p>Soy una lista de items</p>";
            echo "<lu>";
            echo "<li style=color:$color>Item 1</li>";
            echo "<li style=color:$color>Item 2</li>";
            echo "<li style=color:$color>Item 3</li>";
            echo "</lu>";
        }
        else {
            echo "<p>Soy una tabla de items</p>";
            echo "<table style=border:solid;color:$color>";
            echo "<tr>";
            echo "<td style=color:$color>Item 1</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td style=color:$color>Item 2</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td style=color:$color>Item 3</td>";
            echo "</tr>";
            echo "</table>";
        }
        ?>
    </body>
</html>
