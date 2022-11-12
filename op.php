<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="syle.css">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Calculadora</h1>
    <form action="calculadora.php" method="post">
        <?php
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $op=$_POST['operacion'];
        if($op=="suma"){
            print("La suma de $n1 y $n2 es ".($n1+$n2));
        }elseif($op=="resta"){
            print("La resta de $n1 y $n2 es ".($n1-$n2));
        }elseif($op=="multiplicacion"){
            print("La multiplicación de $n1 y $n2 es ".($n1*$n2));
        }elseif($op=="division"){
            print("La división de $n1 y $n2 es ".($n1/$n2));
        }
        ?>
          <input type="submit" value="Calcular">
          
    </form>

    </center>
</body>
</html>