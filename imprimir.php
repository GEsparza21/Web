<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <title>Document</title>
</head>
<body>

<form action="practica15.php" method="post">
    <?php
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $n3=$_POST['n3'];
    $n4=$_POST['n4'];
    $n5=$_POST['n5'];
    $mun=$_POST['mun'];
    if($n1=="" || $n2=="" || $n3=="" || $n4=="" || $n5=="" || $mun==""){
        echo "No se han ingresado todos los datos";
    }else{
        print("Nombre: $n1 <br>");
        print("Apellido Paterno: $n2 <br>");
        print("Apellido Materno: $n3 <br>");
        print("Fecha de nacimiento: $n4 <br>");
        print("Edad: $n5 <br>");
        print("Municipio: $mun <br>");

    }
    ?>
    <button type="submit" value="Regresar">Regresar</button>
    </form>
</body>
</html>