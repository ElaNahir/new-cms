$(document).ready(function(){

    // Barra lateral móviles
    $('.sidenav').sidenav();

    // Mensajes de validación
    let input_tipo = $("input[name=tipo-mensaje]");
    let input_texto = $("input[name=texto-mensaje]");
    if (input_tipo.length && input_texto.length) {
        M.toast({html: input_texto.val(), clases: input_tipo.val() + "lighten-5"});
    }

    // Ocultar toast
    $(".toast").click(function (){
        $(this).hide();
    });

    // Cambiar password (clave)
    $("input[type=checkbox][name=cambiar_clave]").click(function(){
        $("#password").toggleClass("hide");
    });

    // Fecha
    $(".datapicker").datapicker({
        firstDay: true,
        format: 'dd-mm-yyyy',
        i18n: {
            months:["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort:["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            weekdays:["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort:["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
            weekdaysAbbrev: ["D", "L", "M", "M", "J", "V", "S"]
        }
    });

});