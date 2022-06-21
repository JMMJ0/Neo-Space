// import Swal from "sweetalert2";

// var boton = document.getElementById("boton");

// const Swal = require("sweetalert2");


// const Swal = require("sweetalert2");
window.onload = document.getElementById("boton").addEventListener("click", function(e){
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Su reserva se ha realizado con éxito",
        showConfirmButton: true,
    });
}) 