$(document).ready(function () {

    $(".tab").click(function () {
        if(!$(this).hasClass("tab--selected")){
            $(this).addClass("tab--selected");
            $(this).siblings().removeClass("tab--selected");
            $(".content").toggleClass("hide");
        }
    });
});




