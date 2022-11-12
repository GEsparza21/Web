<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syle.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="op.php" method="post">
        <h2>Número 1</h2>
        <input type="text" name="num1" id="num1" required>
        <h2>Número 2</h2>
        <input type="text" name="num2" id="num2" required>
        <h2>operación</h2>
        <select name="operacion" id="operacion">
            
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <button type="submit" value="Calcular">Calcular</button>
        <button type="reset" value="Calcular">Borrar</button>
    </form>
</body>
</html>