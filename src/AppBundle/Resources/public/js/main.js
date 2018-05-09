function filterCb(obj, categorie, filtre) {
    var x, i;
    x = document.getElementsByClassName("filter-card");

    if (filtre == "all") filtre = "";

    if ($(obj).is(":checked")) {
        for (i = 0; i < x.length; i++) {
            if (x[i].getElementsByClassName(categorie)[0].innerHTML.indexOf(filtre) != -1) addClass(x[i], "show");
        }
    } else {
        for (i = 0; i < x.length; i++) {
            if (x[i].getElementsByClassName(categorie)[0].innerHTML.indexOf(filtre) != -1) removeClass(x[i], "show");
        }
    }

}

function filter(){
    var cb = $("input:checkbox");
    var tab = [];
    var x,i;

    filterReset();

    $.each(cb, function(){
         if(this.checked == true){
             tab.push(this.value);
         }
    });
    console.log(tab);
    
    var categories = [], filtres = [];
    var temp;
    for(i =0; i < temp.length; i++){
        temp= tab[0].split(":");
        categories.push(temp[0]);
        filtres.push(temp[0]);
    }
    x = document.getElementsByClassName("filter-card");
    for (i = 0; i < x.length; i++) {
        if(x[i].getElementsByClassName(categorie)[0].innerHTML.indexOf(filtre) != -1)
    }



}
function filterAll() {
    var x;
    x = document.getElementsByClassName("filter-card");

    for (i = 0; i < x.length; i++) {
        addClass(x[i], "show");
    }
}

function filterReset(){
    var x;
    x = document.getElementsByClassName("filter-card");
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "show");
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

