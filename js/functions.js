$(document).ready(function(){
    $(".button-collapse").sideNav();


    $(".sidebar-nav li a")
        .filter(function () {
        var val = false;
        var actual = location.href;
        actual = actual.split("/");
        catName = actual[3].split("?");
        if (location.href == this.href || this.href == window.location.protocol + '//' + actual[2] + '/' + catName[0]) {
            val = true;
        }
        return val;
    })
        .parent()
        .addClass("active");
});
