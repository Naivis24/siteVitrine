$(document).ready(function () {
    'use strict';
    $('#form_titre').autocompleter({
        url_list: '/search-article',
        url_get: '/?term='
    });


    $("#ui-id-1").click(function(){
        var id = $("#form_titre").val();

        if(id.toString().length > 0){
            $(location).attr('href', '/article/'+id.toString());
        }
    })

});


function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filter-card");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
        if (x[i].getElementById("cible").innerHTML.includes(c)) addClass(x[i], "show");
    }
}


function addClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}


function removeClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

