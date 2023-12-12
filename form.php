<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Miri</title>
</head>
<body>
    <style>
        body{
            background-color: black ;
            color: goldenrod;
            font-family: georgia;
            font-size: 20px;
        }
        div{
            display: grid;
            place-items:center;
        }
        .res{
            height: 600px;
        }
    </style>
</body>
</html>
<?php
            $r="1989";
            $r2="Midnights";
            $r3="Cruel Summer";
            $r4="16";
            $r5="Fearless";
            $r6="Lucky You";
            $r7="33";
            $r8="Olivia Meredith Benjamin";
            $r9="13";
            $r10="Taylors Version";
            $ru="";
            $c=0;

            if(isset($_POST['submit'])){
            $ru=$_POST['r1'];
            if($r == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r2'];
            if($r2 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r3'];
            if($r3 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r4'];
            if($r4 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r5'];
            if($r5 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r6'];
            if($r6 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r7'];
            if($r7 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r8'];
            if($r8 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r9'];
            if($r9 == $ru){
                $c=$c+1;
            }
            $ru=$_POST['r10'];
            if($r10 == $ru){
                $c=$c+1;
            }
            echo "<br><div class='res' ><center>Aciertos: ".$c." de 10<br><br>";

            if($c<5){
                echo "No has superado el test pero Aun así se que eres su fan #1 Teamo♥";
            }else if($c>5 and $c<9){
                echo "Estas en un buen camino, pero aún puedes mejorar";
            }else if($c>8 and $c<=10){
                echo "¡Felicidades! Has superado el test con excelencia ♥ Te amooooo Sabía que eras su fan #1</div></center>";
            }
            }
        ?>