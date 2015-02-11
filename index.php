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
        <h1>Üzenet</h1>
        <form action="uzenet.php" method="post">
            Név: <input type="text" name="name">
            <br>
            Telefon: <input type="text" name="telefon">
            <br>
            E-mail: <input type="text" name="email">
            <br>
            Üzenet:  <textarea name="uzenet" rows="4" cols="50"></textarea>
            <br>
            <input type="Submit">
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
