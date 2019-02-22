"use strict" ;

function showHideDetails() {
    //alert("Not implemented yet");
    var paragraphs, p, fig;
    /*jslint -W040*/
    paragraphs = this.parentNode.getElementsByTagName("p");
    fig = this.parentNode.getElementsByTagName("img") [0];
    //paragraphs = this.parentNode.querySelectorAll("p, img");
    /*jslint +W040*/
    for (p = 0; p < paragraphs.length; p += 1) {
        if (paragraphs[p].style.display === "none") {
            paragraphs[p].style.display = "block";
        } else {
            paragraphs[p].style.display = "none";
        }

    }

    if (fig.style.display === "none") {
        fig.style.display = "block";
    } else {
        fig.style.display = "none";
    }
}


    function setup() {
        var films, f, title;
        films = document.getElementsByClassName("film");
        for (f = 0; f < films.length; f += 1) {
            title = films[f].getElementsByTagName("h3")[0];
            title.onclick = showHideDetails;
            title.style.cursor = "pointer";
        }
    }

    if (document.getElementById) {
        window.onload = setup;
    }
