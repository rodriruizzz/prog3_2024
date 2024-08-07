<?php
include("../model/student.class.php");
$operacion=$_REQUEST["operation"];

$student = new Student();

//echo $operacion;
if($operacion=="add"){
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->addStudent();
}else if($operacion=="update"){
    $student->setIdStudent($_REQUEST["idStudent"]);
    $student->setDni($_REQUEST["dni"]);
    $student->setName($_REQUEST["name"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->editStudent();
}else if($operacion=="delete"){
<<<<<<< HEAD
  $student->setIdStudent($_REQUEST["id"]);
  $result=$student->deleteStudent();
  echo $result;

=======
    $student->getIdStudent($_REQUEST["id"]);
    $student->deleteStudent();
    echo $result
>>>>>>> 79715efc43307f5ac493a20b0e6689748278f46a
}

?>