<?php
include("model/student.class.php");
$student = new Student(); //creamos el objeto student de tipo estudiantes
$id=$_REQUEST["idStudent"];
echo "valor del form , $id";
if($_REQUEST["idStudent"]){
$student->setIdStudent($_REQUEST["idStudent"]);
$student->getStudent();
}
echo $student->getIdStudent();
echo $student->getDni();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" name="formEditStudent">
<label>ID</label><input type="text" name="idStudent"><br>
<button type="submit">LISTAR ALUMNO</button>
</form>
    <form method="POST" name="formEditStudent" action="controller/student.controller.php">
        <input type="hidden" name="operation" value="update"/>
        <label>ID</label><input type="text" name="idStudent" value="<?=$student->getIdStudent();?>"><br>
        <label>DNI:</label><input type="text" name="dni" value="<?=$student->getDni();?>"> <br>
        <label>Nombre:</label><input type="text" name="name" value="<?=$student->getName();?>"><br>
        <label>Apellido:</label><input type="text" name="surname" value="<?=$student->getSurname();?>"><br>
        <label>Direcci&oacute;n:</label><input type="text" name="address" value="<?=$student->getAddress();?>"><br>
        <label>Tel&eacute;:</label><input type="text" name="phone" value="<?=$student->getPhone();?>"><br>
        <label>E-mail:</label><input type="text" name="email" value="<?=$student->getEmail();?>"><br>
        <label>Fecha Nac:</label><input type="date" name="birthdate" value="<?=$student->getBirthdate();?>"><br>
        <label>Contraseña&ntilde;:</label><input type="text" name="password"  value="<?=$student->getPassword();?>"><br>
        <label>Colegio:</label><input type="text" name="school" value="<?=$student->getSchool();?>"><br>
        <button type="submit" name="aceptar"> Aceptar</button>
        <button type="reset" name="cancelar"> cancelar</button>
    </form>
</body>
</html>