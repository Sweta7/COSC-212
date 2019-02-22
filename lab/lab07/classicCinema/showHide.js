"use strict" ;

var ShowHide = (function() {
	// creating object
	//var ShowHide = new ShowHideDetails();
	var hide = {};
    var paragraphs, p, fig;
    //alert("Not implemented yet");

    function showHideDetails() {
        //private data and function
        /*jslint -W040*/
        paragraphs = this.parentNode.getElementsByTagName("p");
        fig = this.parentNode.getElementsByTagName("img") [0];
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

	//public data and function
    hide.setup = function() {
        var films, f, title;
        films = document.getElementsByClassName("film");
        for (f = 0; f < films.length; f += 1) {
            title = films[f].getElementsByTagName("h3")[0];
            title.onclick = showHideDetails;
            title.style.cursor = "pointer";
        }
    };

	return hide;
}());


    if (window.addEventListener) {
        window.addEventListener('load', ShowHide.setup);
    } else if (window.attachEvent) {
        window.attachEvent('onload', ShowHide.setup);
    } else {
        alert("Could not attach ’MovieCategories.setup’ to the ’window.onload’ event");
    }


/*    if (document.getElementById) {
        window.onload = ShowHideDetails.setup;
    }*/
