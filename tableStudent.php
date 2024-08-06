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
                    echo "<td> <input type='button' name='editar' value='Editar' onclick=\"location.href='formEditStudent.php?idStudent=".$data["idStudent"]."'\" />";
                    echo "<button class='action-button delete' onclick='askDeleteStudent(" . $data["idStudent"] . ")'>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No existen estudiantes cargados</td></tr>";
            }
            ?>