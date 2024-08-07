<?php
include("database.class.php");


class Student{ 

    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $user=null;
    private $password=null;
    private $school=null;
    private $conexion=null;

    // public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $password, $school, $conexion){
    //     $this->$dni=$dni;
    //     $this->$name=$name;
    //     $this->$birthdate=$birthdate;
    //     $this->$phone=$phone;
    //     $this->$address=$address;
    //     $this->$email=$email;
    //     $this->$user=$user;
    //     $this->$password=$password;
    //     $this->$school=$school;
    // }

    public function addStudent(){
    //crear la consulta
    $sql="INSERT INTO Students (dni, surname, name, birthdate, phone, address, email, password, school) VALUES
    (".$this->dni.",'".$this->surname."','".$this->name."','".$this->birthdate."','".$this->phone."','".$this->address."','".$this->email."','".$this->password."', '".$this->school."')";
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    print $sql;
    $this->conexion->close();
        
    return $result;

    }
    public function deleteStudent(){
    
    $sql="DELETE FROM Students WHERE idStudent=".$this->idStudent;
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->closeDB();
    return $result;

    }
    public function editStudent(){
            $sql="UPDATE Students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."'
            , birthdate='".$this->birthdate."', phone= '".$this->phone."', address='".$this->address."',
             email='".$this->email."', password='".$this->password."', school='".$this->school."' WHERE idStudent=".$this->idStudent;
             echo $sql;
             $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->closeDB();
    header("Location: http://localhost/escuela%202024/prog3_2024/panelstudent.php");
    return $result;
    }
    public function getStudent(){

        $sql="SELECT * FROM Students WHERE idStudent=".$this->idStudent;
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
   

    if($result){
        if($row=$result->fetch_assoc()){
            $this->dni=$row["dni"];
            $this->surname=$row["surname"];
            $this->name=$row["name"];
            $this->birthdate=["birthdate"];
            $this->phone=$row["phone"];
            $this->address=$row["address"];
            $this->email=$row["email"];
            $this->password=$row["password"];
            $this->school=$row["school"];
            $this->conexion->closeDB();
        return true;
        }
    }
    $this->conexion->closeDB();
    return false;
    }
    public function getAllStudents(){
        
        $sql="SELECT * FROM Students" ;
    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->closeDB();

    if($result){
        if($row=$result->fetch_assoc()){
            $this->$dni=$row["dni"];
            $this->$surname=$row["surname"];
            $this->$name=$row["name"];
            $this->$birthdate=["birthdate"];
            $this->$phone=$row["phone"];
            $this->$address=$row["address"];
            $this->$email=$row["email"];
            $this->$password=$row["password"];
            $this->$school=$row["school"];
        return true;
        }
    }
    return false;

    }
    //geeter y Setter
    public function getIdStudent(){
        return $this->idStudent;
    }
    public function setIdStudent($idStudent){
        return $this->idStudent=$idStudent;
    }

    public function getDni(){
        return $this->dni;

    }

    public function setDni($dni){
        $this->dni=$dni;

    }

    public function getName(){
        return $this->name;

    }

    public function setName($name){
        $this->name=$name;

    }

    public function getSurname(){
        return $this->surname;

    }

    public function setSurname($surname){
        $this->surname=$surname;

    }

    public function getBirthdate(){
        return $this->birthdate;

    }

    public function setBirthdate($birthdate){
        $this->birthdate=$birthdate;

    }
    public function getPhone(){
        return $this->phone;

    }

    public function setPhone($phone){
        $this->phone=$phone;

    }
    public function getAddress(){
        return $this->address;

    }

    public function setAddress($address){
        $this->address=$address;

    }
    public function getEmail(){
        return $this->email;

    }

    public function setEmail($email){
        $this->email=$email;

    }
    public function getPassword(){
        return $this->password;

    }

    public function setPassword($password){
        $this->password=$password;

    }
    public function getSchool(){
        return $this->school;

    }

    public function setSchool($school){
        $this->school=$school;

    }
}
 

?>