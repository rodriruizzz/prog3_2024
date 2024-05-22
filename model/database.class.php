<?
//lo modifico lolo
    class Database{
        private $nombre="db_school";
        private $servidor="localhost";
        private $usuario="root";
        private $clave="#Promo2024";
        private $conexion = null;

        //Conetar la base de datos
        public function connectDB(){
            $this ->conexion= new mysqli($this->servidor ,$this->usuario ,$this->clave ,$this-> nombre);
            if($this->conexion->connect_error){
                print "Fallo la conexion".$this->conexion->connect_error;
            }
        }
        //Ejecuta la consulta
        //Por ejemplo: INSERT INTO, SELECT, DELETE, UPDATE...
        public function query($sql){
            return $this->conexion->query($sql);
        }
        //Cierra la conexion a la base de daots.
        
        public function closeDB(){
            if($this->conexion !== null){
                $this->conexion->close();
            }
        }
    }
?>
