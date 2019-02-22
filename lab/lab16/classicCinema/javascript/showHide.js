"use strict" ;

var ShowHide = (function () {
    "use strict";

    var pub = {};

    //public data and function
     pub.setup = function () {
        $(".film").each(function() {
            var title = $($(this).find("h3")[0]);
            title.on("click", function() {
                $(this).siblings().toggle();
            });
            title.css({cursor: "pointer"});
        });
    };

    // Expose public interface
    return pub;
}());

$(document).ready(ShowHide.setup);