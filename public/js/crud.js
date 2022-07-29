$(document).ready(function () {
    $('#datos').DataTable({
        "lengthMenu": [[5,10,50,-1],[5,10,20,"All"]],
        responsive: true,
        language: {
            "lengthMenu": 'Mostrar _MENU_  registros por página',
            "zeroRecords": 'Nada Encontrado - perdón',
            "info": 'Mostrando página _PAGE_ de _PAGES_',
            "infoEmpty": 'No hay registros disponibles',
            "infoFiltered": '(Filtrado de _MAX_ registros totales)',
            "search": 'Buscar',
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        },
    });
});

function cancelar(){
    Swal.fire({
                title: 'Esta seguro?',
                text: "Los cambios realizados se perderan!",
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                cancelButtonAriaLabel: 'Cancelar',
                cancelButtonColor: '#d33',  
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Si, deseo salir!',
                allowOutsideClick: false
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Realizado!',
                    text: 'No se guardaron los cambios.',
                    icon: 'success'
                }).then(function(){
                    window.location = 'admin' 
                });       
            }
        })
}