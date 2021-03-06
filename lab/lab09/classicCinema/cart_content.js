/**
 * new page to display content of shopping cart
 */

    var Cart_content = (function () {
        "use strict";

        var pub = {};

        function New_page (cart_list) {
            var title, price, total_cost;
            total_cost = 0;
            //var element = document.getElementById("cart_details");
                cart_list.forEach(function (cart) {
                    $("#cart_details").append("<li>" + cart.title + " = " + cart.price + "</li>");
                    total_cost += parseFloat(cart.price);
                });
                $("#cart_details").append("<p>Total cost = " + total_cost + "</p>");
            }

        pub.setup = function () {
            var cart_list = Cookie.get("myCart");
            console.log(cart_list);
            if (cart_list === null) {
                $("#cart_details").html("<p>Cart is empty</p>");
            } else {
                cart_list = JSON.parse(cart_list);
                New_page(cart_list);
            }
        };

        return pub;
    }());


/*if (window.addEventListener) {
    window.addEventListener('load', Cart_content.setup);
} else if (window.attachEvent) {
    window.attachEvent('onload', Cart_content.setup);
} else {
    alert("Could not attach ’Cart_content.setup’ to the ’window.onload’ event");
}*/

$(document).ready(Cart_content.setup);
