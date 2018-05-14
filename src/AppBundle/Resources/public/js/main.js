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

    if (tab.length != 0) {

        var categories = [], filtres = [];
        var temp;
        for (i = 0; i < tab.length; i++) {
            temp = tab[i].split(":");
            categories.push(temp[0]);
            filtres.push(temp[1]);
        }
        x = document.getElementsByClassName("filter-card");
        for (i = 0; i < x.length; i++) {
            for (j = 0; j < tab.length; j++) {
                if (x[i].getElementsByClassName(categories[j])[0].innerHTML.indexOf(filtres[j]) != -1) {
                    addClass(x[i], "afficher");
                }

            }

        }
    }
    else {
        filterAll();
    }
}

function filterSearchBar() {

    filter();
    var x, texte;
    x = document.getElementsByClassName("afficher");
    texte = $('#target').val().toUpperCase();

    for (var i = x.length - 1; i >= 0; i--) {
        if (x[i].getElementsByClassName("card-title")[0].innerHTML.toUpperCase().indexOf(texte) == -1) {
            removeClass(x[i], "afficher");
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
    element.classList.add(name);
}


function removeClass(element, name) {
    element.classList.remove(name);
}

function reinit() {
    var cb = $("input:checkbox");

    $.each(cb, function () {
        this.checked = false;
    });

    $('#target').val("");

    filterAll();
}

