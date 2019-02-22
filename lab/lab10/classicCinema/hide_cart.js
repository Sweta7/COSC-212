"use strict" ;

var ShowHideCart = (function() {
    var pub = {};

    //public data and function
    pub.setup = function() {
        if (Cookie.get("myCart") !== null){
            $("#checkoutForm").css("display","block");
        } else {
            $("#checkoutForm").css("display","none");
        }
    };

    return pub;
}());


$(document).ready(ShowHideCart.setup);

