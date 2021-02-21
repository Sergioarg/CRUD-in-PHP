
// Funcion por la cual obtengo la informacion del usario en el modal editar.

function editar(val){

    var g = document.getElementsByClassName(val)
    
    document.getElementById('nombres').value = g[1].innerText
    document.getElementById('apellidos').value = g[2].innerText
    document.getElementById('cedula').value = g[3].innerText    
    document.getElementById('correo').value = g[4].innerText    
    document.getElementById('telefono').value = g[5].innerText 
}

// Función por la cual obtengo el id del usuario a eliminar.

function obtenerId(id){
    document.getElementById("idEliminar").innerHTML=id;
    document.getElementById("id").value=id;
}


// Funcion por para validar que solo pueda escribir letras en los inputs.

function solo_letras(e){

    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;}
        }
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false; }
}
// Funcion por para validar que solo pueda escribir numeros en los inputs.

function solo_numeros(e)
{	
    var key = window.Event ? e.which : e.keyCode;                       
    return (key >= 48 && key <= 57);                                      
}		


// Deshabilita el envío de formularios si hay campos no válidos
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Obteniene los formularios a los que queremos agregar estilos de validación
            var forms = document.getElementsByClassName('needs-validation');
            // Hace un bucle de ellos y evita el envio
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();

                