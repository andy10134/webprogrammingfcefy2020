var count = 1;

$("#add_button").click(function (e) {
    var nuevoInput = $(this).prev().clone();

    count = count + 1;
    var time = nuevoInput.find("#dia").attr("name").split("-");
    nuevoInput.attr("name", time[0] + "-" + count);
    nuevoInput.attr("id", time[0] + "-" + count);

    console.log(count);

    nuevoInput.insertBefore("#add_button");

});

var readURL = function (input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".profile-pic").attr("src", e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on("change", function () {
    readURL(this);
});

$(".upload-button").on("click", function () {
    $(".file-upload").click();
});


//MODAL DE ACTUALIZACION DE TIPO DE USUARIO

$("#trainner-button").click(function (e) {
    var datos = new FormData();
    datos.append("userId", $("#id-user").text());
    $.ajax({
        type: "POST",
        url: "views/modules/ajax.php",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            swal({
                title: "Actualizacion efectuada ;)",
                text: "Tu cuenta ha sido actualizada satisfactoriamente Preparate para dar clases!",
                icon: "success",
                button: "Aceptar",
            }).then(function () {
                window.location = "http://localhost/webprogrammingfcefy2020/Golive/perfil";
            });
        }
    });
});


$("#userAccount-button").click(function (e) {
    swal({
        title: "Bien Hecho",
        text: "Tu cuenta ha sido actualizada satisfactoriamente",
        icon: "success",
        button: "Aww yiss!",
    }).then(function () {
        window.location = "http://localhost/webprogrammingfcefy2020/Golive/perfil";
    });
});