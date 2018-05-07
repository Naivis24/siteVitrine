function filterCb(obj,categorie, filtre){
    var x, i;
    x = document.getElementsByClassName("filter-card");

    if($(obj).is(":checked")){
        for (i = 0; i < x.length; i++) {
            if (x[i].getElementById(categorie).innerHTML.includes(filtre)) addClass(x[i], "show");
        }
    }else{
        for (i = 0; i < x.length; i++) {
            removeClass(x[i], "show");
            if (x[i].getElementById(categorie).innerHTML.includes(filtre)) removeClass(x[i], "show");
        }

    }

}


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

