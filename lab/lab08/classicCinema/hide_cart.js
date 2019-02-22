"use strict" ;

var ShowHideCart = (function() {
    // creating object
    //var ShowHide = new ShowHideDetails();
    var pub = {};
    var checkout;
    //alert("Not implemented yet");

    //public data and function
    pub.setup = function() {
        //private data and function
        /*jslint -W040*/
        checkout = document.getElementById("checkoutForm");
        /*jslint +W040*/

        if (Cookie.get("myCart") !== null){
            checkout.style.display = "block";
        } else {
            checkout.style.display = "none";
        }
    };

    return pub;
}());


if (window.addEventListener) {
    window.addEventListener('load', ShowHideCart.setup);
} else if (window.attachEvent) {
    window.attachEvent('onload', ShowHideCart.setup);
} else {
    alert("Could not attach ’MovieCategories.setup’ to the ’window.onload’ event");
}

