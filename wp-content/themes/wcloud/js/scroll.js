$(document).ready(function() {

    $(".nav-menu a").click(function() {
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top + "px"
        }, {
            duration: 2500,
            easing: "swing"
        });
        return false;
    });

});