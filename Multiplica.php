<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <title>Resultsdo</title>
    <style type="text/css">
    body{
        background: rgb(183,196,207);
background: linear-gradient(90deg, rgba(183,196,207,1) 0%, rgba(238,227,203,1) 35%, rgba(215,192,174,1) 100%);

font-family: 'Xanh Mono', monospace;
			font-size: 30px;
			color: #000000;
			text-align: center;
		}
        </style>
</head>
<body>
   
<?php
    $n=$_POST['num'];
    if($n<1 or $n>1009){
        print("No has escrito ningpun número<br>");
        print('<br><a href="practica13.php">Volver</a>');
    }else{
     print("Tabla de multiplicar del $n<br>");   
     $i=1;
        while($i<=10){
            
            print("$n x $i = ".$n*$i."<br>");
            $i++;
        }
        print('<br><a href="practica13.php">Volver</a>');
    }

    ?> 
</body>
</html>