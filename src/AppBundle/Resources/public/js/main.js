function onStart() {
    filterAll();
    initSuggestion();
    var cookies = getCookie("filters");
    if(cookies != ""){
        var cb = $("input:checkbox");
        $.each(cb, function () {
            if(cookies.includes(this.value)){
                this.checked=true;
            }
        });
        filter();
    }

    var x = document.getElementById("homme-tab");
    x.addEventListener("click", initSuggestion);
    x = document.getElementById("femme-tab");
    x.addEventListener("click", initSuggestion);
    x = document.getElementById("enfant-tab");
    x.addEventListener("click", initSuggestion);

}


function initSuggestion() {
    console.log("call initsuggfestion");
    setTimeout(function () {
        var x = document.getElementsByClassName("col-9 tab-pane fade show active")[0].getElementsByClassName("row")[0].getElementsByClassName("afficher");
        console.log(document.getElementsByClassName("col-9 tab-pane fade show active")[0].id);
        var brandsArray = [], filtersArray = [];
        for (var i = 0; i < x.length; i++) {
            var temp = x[i].getElementsByClassName("card-title")[0].innerHTML;
            temp = temp.substring(1);
            temp = temp.substring(0, temp.length - 1);
            brandsArray.push(temp);
        }
        var cb = $("input:checkbox");
        $.each(cb, function () {
            filtersArray.push(this.value.split(":")[1]);
        });
        autocomplete(document.getElementById("target"), brandsArray, filtersArray);
    }, 0);

}

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
        var temp, cookie="";
        for (i = 0; i < tab.length; i++) {
            cookie =  cookie + "|" + tab[i];
            temp = tab[i].split(":");
            categories.push(temp[0]);
            filtres.push(temp[1]);
        }
        setCookie("filters", cookie);
        x = document.getElementsByClassName("filter-card");
        for (i = 0; i < x.length; i++) {
            var boolean = [];
            temp = false;
            var currentCategorie = categories[0];
            for (j = 0; j < tab.length; j++) {
                if (categories[j] != currentCategorie) {
                    currentCategorie = categories[j];
                    boolean.push(temp);
                    temp = false;
                }
                if (x[i].getElementsByClassName(categories[j])[0].innerHTML.indexOf(filtres[j]) != -1) {
                    temp = true;
                }

            }
            boolean.push(temp);
            temp = boolean[0];
            for (var k = 1; k < boolean.length; k++) {
                temp = temp && boolean[k];
            }
            if (temp) {
                addClass(x[i], "afficher");
            }

        }
    }
    else {
        filterAll();
    }
}

function filterSearchBar(str) {

    filter();
    var x, texte;
    x = document.getElementsByClassName("afficher");
    texte = str.toUpperCase();
    for (var i = x.length - 1; i >= 0; i--) {
        var aGarder = false;
        var categories = x[i].getElementsByClassName("categorie")[0].innerHTML.toUpperCase().split(",");
        var indexDebutTitle = x[i].getElementsByClassName("card-title")[0].innerHTML.toUpperCase().search("[A-Z]")
        for (var j = 0; j < categories.length; j++) {

            var indexDebutCat = categories[j].search("[A-Z]");
            if (x[i].getElementsByClassName("card-title")[0].innerHTML.toUpperCase().substring(indexDebutTitle, indexDebutTitle + texte.length) == texte
                || categories[j].substring(indexDebutCat, indexDebutCat + texte.length) == texte) {
                aGarder = true; break;
            }
        }
        if (!aGarder) {
            removeClass(x[i], "afficher");
        }
    }

    affichageVide();
}


function filterAll() {
    var x;
    x = document.getElementsByClassName("filter-card");
    for (var i = 0; i < x.length; i++) {
        addClass(x[i], "afficher");
    }


}

function filterReset() {
    var x;
    x = document.getElementsByClassName("filter-card");
    for (var i = 0; i < x.length; i++) {
        removeClass(x[i], "afficher");
    }
    delete_cookie("filters");

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

function affichageVide() {
    var x;
    x = document.getElementsByClassName("afficher");


    if (x.length == 0) {
        document.getElementsByClassName("affichageVide")[0].innerHTML = "<p class='text-search-null'>Nous sommes désolés, votre recherche n'a donné aucun résultat.</p>";
    }
    else {
        document.getElementsByClassName("affichageVide")[0].innerHTML = "";
    }
}

function autocomplete(inp, arrBrands, arrFilters) {

    inp.removeEventListener("input", eventInput);
    inp.removeEventListener("keydown", eventKeydown);
    document.removeEventListener("click", eventCloseLists);

    var currentFocus;
    inp.addEventListener("input", eventInput);
    inp.addEventListener("keydown", eventKeydown);

    document.addEventListener("click", eventCloseLists);

    function eventCloseLists(e) {
        closeAllLists(e.target);
    }

    function eventInput(e) {

        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) {
            return false;
        }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arrBrands.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arrBrands[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                b.innerHTML = "<strong>" + arrBrands[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arrBrands[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arrBrands[i] + "'>";
                b.addEventListener("click", function (e) {
                    inp.value = this.getElementsByTagName("input")[0].value;
                    filterSearchBar(inp.value);
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }

        for (i = 0; i < arrFilters.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arrFilters[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                b.innerHTML = "<strong>" + arrFilters[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arrFilters[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arrFilters[i] + "'>";
                b.addEventListener("click", function (e) {
                    inp.value = this.getElementsByTagName("input")[0].value;
                    filterSearchBar(inp.value);
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }

    }

    function eventKeydown(e) {

        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    }

    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

} // FIN AUTOCOMPLETE

function setCookie(cname, cvalue) {
    document.cookie = cname + "=" + cvalue + ";"
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function delete_cookie( name ) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}