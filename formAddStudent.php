<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" name="formAddStudent" action="controller/student.controller.php">
        <input type="hidden" name="operation" value="add"/>
        <label>DNI:</label><input type="text" name="dni"><br>
        <label>Nombre:</label><input type="text" name="name"><br>
        <label>Apellido:</label><input type="text" name="surname"><br>
        <label>Direcci&oacute;n:</label><input type="text" name="address"><br>
        <label>Tel&eacute;:</label><input type="text" name="phone"><br>
        <label>E-mail:</label><input type="text" name="email"><br>
        <label>Fecha Nac:</label><input type="date" name="birthdate"><br>
        <label>Contraseña&ntilde;:</label><input type="text" name="password"><br>
        <label>Colegio:</label><input type="text" name="school"><br>
        <button type="submit" name="aceptar"> Aceptar</button>
        <button type="reset" name="cancelar"> cancelar</button>
    </form>
</body>
</html>