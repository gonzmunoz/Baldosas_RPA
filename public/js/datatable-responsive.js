$(document).ready(function() {
    
    var $window = $(window);
    
    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize > 480) {
            // Quitar la clase de tabla reponsive si el tamaño de pantalla es mayor de pequeño (móviles)
            $('div .table-responsive').removeClass("table-responsive");
            $('.dataTables_filter label').addClass("float-right");
        }
    }
    // Ejecutar al cargar la página
    checkWidth();
    // Ejecutar si cambia el tamaño
    $(window).resize(checkWidth);
});