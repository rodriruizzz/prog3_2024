<?php
include("../model/student.class.php");
$operacion=$_REQUEST["operation"];

$student = new Student();

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
}else if($operation=="update"){

}else if($operation=="delete"){
    
}

?>