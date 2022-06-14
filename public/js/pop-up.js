var reserva = document.getElementById('reservar');
// ES6 Modules or TypeScript
import Swal from 'sweetalert2'

// CommonJS
const Swal = require('sweetalert2')

reserva.addEventListener('click', function(e){
    Swal.fire({
        position: "center",
        icon: "success",
        title: "Muchas gracias por su reserva",
        showConfirmButton: false,
        timer: 1500,
    });
})

