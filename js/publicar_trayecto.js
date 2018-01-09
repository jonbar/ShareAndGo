$(document).ready(function () {

//    FUNCION PARA SELECCIONAR TODOS LOS CHECKBOX
    $("#seleccionartodos").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
//    FUNCION PARA AÑADIR Y BORRAR TRAYECTOS
    $(".add-more").click(function () {
        var html = $(".copy-fields").html();
        $(".after-add-more").after(html);
    });
    $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
    });
});