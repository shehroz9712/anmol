function valueChanged() {
    if ($('.custom_package').is(":checked")) {
        $(".package").hide();
        $(".menu").show();
    }

    else {

        $(".menu").hide();
        $(".package").show();
    }
}