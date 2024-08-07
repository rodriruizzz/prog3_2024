<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Estudiantes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            text-align: center;
        }
        .action-button.delete {
            background-color: #dc3545;
        }
    </style>
    <script>
        function editStudent(id) {
            window.location.href = `http://localhost/escuela%202024/prog3_2024/formEditStudent.php?idStudent=${id}`;
        }

        function deleteStudent(id) {
            // Aquí puedes agregar la lógica para eliminar al estudiante
            alert('Eliminar estudiante con ID: ' + id);
        }
    </script>
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
