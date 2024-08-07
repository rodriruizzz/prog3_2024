<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
</head>
<body>
    <h1>Panel de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>ID Estudiantes</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Fecha Nac.</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include ("model/student.class.php");
            $student= new Student();
            $allStudents= $student->getAllStudents();
            if($allStudents){
                foreach($allStudents as $data){
                    print "<tr>";
                    print "<td>".$data["idStudent"]."</td";
                    print "<td>".$data["surname"]."</td";
                    print "<td>".$data["name"]."</td";
                    print "<td>".$data["dni"]."</td";
                    print "<td>".$data["birthdate"]."</td";
                    print "<td>".$data["phone"]."</td";
                    print "<td>"los dos botones"</td";
                }              
            }else{
                print "No existen estudiantes cargados";
            }



            ?>


        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--JavaScript Alertify -->
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<script src="js/funciones.js"></script>
</html>
