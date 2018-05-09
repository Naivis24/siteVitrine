function filter() {
    var cb = $("input:checkbox");
    var tab = [];
    var x, i;

    filterReset();

    $.each(cb, function () {
        if (this.checked == true) {
            tab.push(this.value);
        }
    });

    var categories = [], filtres = [];
    var temp;
    for (i = 0; i < tab.length; i++) {
        temp = tab[i].split(":");
        categories.push(temp[0]);
        filtres.push(temp[1]);
    }
    console.log(categories);
    console.log(filtres);
    x = document.getElementsByClassName("filter-card");
    for (i = 0; i < x.length; i++) {
        temp = true;
        for (j = 0; j < tab.length; j++) {
            if (x[i].getElementsByClassName(categories[j])[0].innerHTML.indexOf(filtres[j]) != -1) {
                temp = (temp && true);
            }
            else{
                temp= (temp && false);
            }
        }
        if(temp) addClass(x[i], "afficher");
    }
}

function filterSearchBar(){
    filterReset();
    var x, i, texte;
    x = document.getElementsByClassName("filter-card");
    texte=$('#target').val().toUpperCase();

    for(i=0; i < x.length; i++){
        if(x[i].getElementsByClassName("card-title")[0].innerHTML.toUpperCase().indexOf(texte) != -1){
            addClass(x[i], "afficher");
        }
    }
}


function filterAll() {
    var x;
    x = document.getElementsByClassName("filter-card");

    for (i = 0; i < x.length; i++) {
        addClass(x[i], "afficher");
    }
}

function filterReset() {
    var x;
    x = document.getElementsByClassName("filter-card");
    for (i = 0; i < x.length; i++) {
        removeClass(x[i], "afficher");
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

function reinit(){
    var cb = $("input:checkbox");

    $.each(cb, function () {
        this.checked =false;
    });

    $('#target').val='';

    filterAll();




}

