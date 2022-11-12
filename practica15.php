<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="syle.css">
</head>
<body>
    <form action="imprimir.php" method="post">
        <h1>Registro de datos</h1>
        Ingresa su nombre:<br/>
<input type="text" name="n1" placeholder="Nombre" required><br/>
Ingresa tu Apellido Paterno:<br/>
<input type="text" name="n2" placeholder="Apellido Paterno" required><br/>
Ingresa tu Apellido Materno:<br/>
<input type="text" name="n3" placeholder="Apellido Materno" required><br/>
Ingresa su fecha de nacimiento:<br/>
<input type="date" name="n4" id="Fecha de nacimiento"required><br/>
Ingresa tu edad:<br/>
<input type="text" name="n5" placeholder="Edad" required><br/>
Municipio: <br/>
<select name="mun" >
    <option >Selecciona Municipio</option>
    <option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
    <option value="Tultitlán">Tultitlán</option>
    <option value="Tultepec">Tultepec</option>
    <option value="Tlalnepantla">Tlalnepantla</option>
    <option value="Tepotzotlán">Tepotzotlán</option>
    <option value="Naucalpan">Naucalpan</option>
    <option value="Ecatepec">Ecatepec</option>

</select><br/>
<button type="submit" value="Enviar">Enviar</button>
    </form>
    
</body>
</html>