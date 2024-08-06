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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function editStudent(id) {
            window.location.href = `http://localhost/escuela%202024/prog3_2024/formEditStudent.php?idStudent=${id}`;
        }

        function deleteStudent(id) {
            alert('Eliminar estudiante con ID: ' + id);
            $.ajax({
                    url: '', // Cambia esta URL por la que necesites
                    method: 'GET',
                    success: function(response) {
                        $('#result').html(JSON.stringify(response));
                    },
                    error: function(error) {
                        console.error('Error en la solicitud AJAX:', error);
                    }
                });
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
            include("model/student.class.php");
            $student = new Student();
            $allStudents = $student->getAllStudents();
            if ($allStudents) {
                foreach ($allStudents as $data) {
                    echo "<tr>";
                    echo "<td>" . $data["idStudent"] . "</td>";
                    echo "<td>" . $data["surname"] . "</td>";
                    echo "<td>" . $data["name"] . "</td>";
                    echo "<td>" . $data["dni"] . "</td>";
                    echo "<td>" . $data["birthdate"] . "</td>";
                    echo "<td>" . $data["phone"] . "</td>";
                    echo "<td>";
                    echo "<button class='action-button' onclick='editStudent(" . $data["idStudent"] . ")'>Edit</button>";
                    echo "<button class='action-button delete' onclick='deleteStudent(" . $data["idStudent"] . ")'>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No existen estudiantes cargados</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
