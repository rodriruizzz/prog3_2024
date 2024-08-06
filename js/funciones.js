function askDeleteStudent(id) {
    alertify.confirm("Eliminar dato, ¿está seguro que desea eliminar este registro?",
        function() { deleteStudent(id); },
        function() { alertify.error('Cancelado'); });
}

function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function deleteStudent(id) {
    $.ajax({
        type: "POST",
        url: "./controller/student.controller.php",
        data: "id=" + id + "&operation=delete",
        success: async function(result) {
            console.log(result);
            if (result == 1) {
                console.log("chill");
                alertify.success('El proceso se ejecutó correctamente');
                await delay(2000); // 2 segundos de delay antes de recargar la página
                location.reload();
            } else {
                console.log(result);
                alertify.error('El proceso no se pudo realizar');
            }
        }
    });
}
