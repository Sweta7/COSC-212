    /**
     * To store item added into a cookie.
     */

    var Cart = (function () {
        "use strict" ;
        var pub = {};


        function button_alert() {
            var title, price;
            var cart_list = [];
            if (Cookie.get("myCart") !== null){
                cart_list = JSON.parse(Cookie.get("myCart")); //object from cart_list
            }


            title = $(this).parent().parent().find("h3").html();
            price = $(this).parent().find(".price").html();

            var cart_obj = {};
            cart_obj.title = title;
            cart_obj.price = price;
            cart_list.push(cart_obj);
            Cookie.set("myCart", JSON.stringify(cart_list));// string of cart_list

        }



        //public data and function
        pub.setup = function() {
            /*var buttons, i, btn;
            buttons = document.getElementsByClassName("buy");
            for (i = 0; i < buttons.length; i += 1) {
                btn = buttons[i];
                btn.onclick = button_alert;
                btn.style.cursor = "pointer";
            }*/

            $(".buy").click(button_alert)
        };
        return pub;
    }());

$(document).ready(Cart.setup);
