$(document).on("click","#salir-irse2", function(){
    swal.fire({

        icon: "warning",
        title: "¿ESTAS APUNTO DE CERRAR SESIÓN",
        text: "¡SI DESEA PUEDE PERMANECER EN LA PAGINA!",
        showCancelButton: true,
        showConfirmButton: true,
        cancelButtonColor: '#fff159',
        cancelButtonText: "Cancelar",
        confirmButtonColor: '#d33',
        confirmButtonText: "Salir"

    }).then(function(result){

        if(result.value){

            
            window.location ="controladores/Salir.php";

        }


    })

})