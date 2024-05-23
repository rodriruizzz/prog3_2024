<?php
include("database.class.php")


class Student{
    private $idStudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $password=null;
    private $school=null;

    public function __construc($dni, $surname, $name, $birthdate, $phone, $address, $email, $password, $school){
        $this->dni=$dni;
        $this->surname=$surname;
        $this->name=$name;
        $this->birthdate=$birthdate;
        $this->phone=$phone;
        $this->address=$address;
        $this->email=$email;
        $this->password=$password;
        $this->school=$school;

        
    }


    public function addStudent(){
        //crear la consulta
        $sql="INSERT INTO student (idStudent, dni, surname, name, birthdate, phone, address, email, password, school) VALUES 
        (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthdate."', '".$this->phone."', '".$this->email."', '".$this->password."', '".$this->school."' )";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();

        return $result;

    }

    public function editStudent(){
                //crear la consulta
        $sql= "UPDATE student SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."'
        , birthdate= '".$this->birthdate."', phone='".$this->phone."', address='".$this->address."'
        , email='".$this->email."', password='".$this->password."'
        , school='".$this->school."' WHERE idStudent=".$this->idStudent.;
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();

        
    }

    public function deleteStudent(){
        $sql="DELETE FROM students WHERE idStudent=".$this->idStudent;
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();    
        
    }


    public function getStudent(){
        
    }
        public function deleteStudent(){
            $sql="SELECT * FROM students WHERE idStudent=".$this->idStudent;
            $this->conexion=new Database();
            $result= $this->conexion->query($sql);
            $this->conexion->close();    
            if ($result){
                if ($row=$result->fetch__assoc()){
                    $this->dni=$row("dni");
                    $this->name=$row("name");
                    $this->surname=$row("surname");
                    $this->birthdate=$row("birthdate");
                    $this->phone=$row("phone");
                    $this->address=$row("address");
                    $this->email=$row("email");
                    $this->password=$row("password");
                    $this->school=$row("school");
                    return true 

                }

            }
    }

    public function getALLStudent(){

        
    }
    //Geeter y Setter
    public function getIdStudent(){
        return $this->idStudent;

    }

    public function setIdStudent ($idStudent) {
        $this->idStudent=$idStudent;

    }
}



?>