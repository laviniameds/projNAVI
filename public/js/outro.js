$("input[name='outro']").on("click", function() {
    $("input['name='genero']").attr("disabled", true);

    $(this).next("input").attr("disabled", false)
});
