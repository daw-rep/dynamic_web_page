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
        ?>
        <p>Fíjate en esta página web</p>

        <?php
        if (randomDecision()) {
            ?>

            <p>Soy una lista de items</p>
        <lu>
            <li style=color:<?php echo $color; ?>>Item 1</li>
            <li style=color:<?php echo $color; ?>>Item 2</li>
            <li style=color:<?php echo $color; ?>>Item 3</li>
        </lu>
        <?php
    } else {
        ?>
        <p>Soy una tabla de items</p>
        <table style=border:solid;color:<?php echo $color; ?>>
            <tr>
                <td style=color:<?php echo $color; ?>>Item 1</td
            </tr>
            <tr>
                <td style=color:<?php echo $color; ?>>Item 2</td>
            </tr>
            <tr>
                <td style=color:<?php echo $color; ?>>Item 3</td>
            </tr>
        </table>
        <?php
    }
    ?>
</body>
</html>
