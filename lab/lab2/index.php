<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8" />
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main">
        <?php
        
            include'inc/functions.php';
            
            play();
            // $randomValue1 = rand(0,2);
            // displaySymbol($randomValue1);
            // $randomValue2 = rand(0,2);
            // displaySymbol($randomValue2);
            // $randomValue3 = rand(0,2);
            // displaySymbol($randomValue3);
           // echo "<br /><hr> Values: $randomValue1 $randomValue2  $randomValue3 ";
        
            // for ($i=0; $i < 3; $i++) {
            //   displaySymbol();
            // }              
        ?>
        <form>
        <input type="submit" value="Spin!"/>
            </form>
            </div>
<!--
         <img src="img/lemon.png" width="70" alt="Lemon" title="Lemon" />
         <img src="img/cherry.png" width="70" alt="Cherry" title="Cherry" />
         <img src="img/orange.png" width="70" alt="Orange" title="Orange" />
-->
<footer>
            CST 336. 2018&copy; Martinez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>
            <img id="veri" src="img/buddy_verified.png" alt="buddy check"/>
        </footer>
    </body>
</html>