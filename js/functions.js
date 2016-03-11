$(document).ready(function(){
    $(".button-collapse").sideNav();


    $(".sidebar-nav li a")
        .filter(function () {
        var val = false;
        var actual = location.href;
        console.log(actual);
        actual = actual.split("/");
        console.log(actual);
        catName = actual[3].split("?");
        console.log(location.href);
        if (location.href == this.href || this.href == window.location.protocol + '//' + actual[2] + '/' + catName[0]) {
            val = true;
        }
        console.log(val);
        return val;
    })
        .parent()
        .addClass("active");
});
