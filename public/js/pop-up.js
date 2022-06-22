var boton = document.getElementsByClassName("link");
var cancelar = document.getElementsByClassName("link_rojo");
var formulario = document.getElementById("confirmacion");
var borrar = document.getElementsByClassName("borrar");
var confirmacion = document.getElementById("confirmacion");

for (var i = 0; i < boton.length; i++) {
    window.onload = boton[i].addEventListener("click", function () {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Su reserva se ha realizado con éxito",
            showConfirmButton: true,
        });
    });
}

for (var i = 0; i < cancelar.length; i++) {
    window.onload = cancelar[i].addEventListener("click", function () {
        console.log();
        Swal.fire({
            title: "¿Estás seguro de que quieres cancelar el viaje?",
            text: "No podrás revertir los cambios",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, deseo cancelarlo",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Cancelado",
                    "Tus viajes se han actualizado",
                    "success"
                );
                confirmacion.submit();
            }
        });
    });
}

for (var i = 0; i < borrar.length; i++) {
    window.onload = borrar[i].addEventListener("click", function (e) {
        Swal.fire({
            title: "¿Estás seguro de que quieres eliminar este usuario?",
            text: "No podrás revertir los cambios",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, deseo eliminarlo",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "Eliminiado",
                    "Los usuarios se han actualizado",
                    "success"
                );
                document.getElementById("confirmacion").submit();
            }
        });
    });
}
