/**
 * Carousel to move picture at interval of time.
 */

var Carousel = (function(){
    "use strict" ;
	var pub = {};
	
	//private data
	var categoryList = [];
	var categoryIndex = 0;
	
	//private function
	function nextCategory(){
		/*var element = document.getElementById("carousel");
		element.innerHTML = categoryList[categoryIndex].makeHTML();
		categoryIndex +=1;
		if(categoryIndex >= categoryList.length){
			categoryIndex = 0;
		}
	}*/
    
    
     'use strict';
        var element = document.getElementById("carousel");
        element.innerHTML = categoryList[categoryIndex].makeHTML();
        $("img").animate({
            opacity: '0.0',
            //width: "300px",
            height: "fadeOut",
            //right: "300px"
        }, 2000);
        $("img").animate({
            opacity: '1.0',
            width: "fadeOut"
        }, 2000, "swing");
        
        categoryIndex += 1;
        if (categoryIndex >= categoryList.length) {
            categoryIndex = 0;
        }

    }
	
	//private function
	function MovieCategory(title, image, page) { 
		this.title = title;
		this.image = image;
		this.page = page;

		this.makeHTML = function() {
			return "<a href='" + this.page + "'><figure>" +
			"<img src='" + this.image + "'>" + "<figcaption>" + this.title + "</figcaption>" + "</figure></a>";
		};
	}
	// public function
	// variable and methods want to be public is put into object pub
	pub.setup = function() {
		categoryList.push(new MovieCategory("Classic Films", "images/Metropolis.jpg ", "classic.php"));
		categoryList.push(new MovieCategory("Science Fiction and Horror", "images/Plan_9_from_Outer_Space.jpg", "scifi.php"));
		categoryList.push(new MovieCategory("Alfred Hitchcock", "images/Vertigo.jpg", "hitchcock.php"));
		nextCategory();
      	setInterval(nextCategory, 4000);
   };

	return pub;
}());

	if (window.addEventListener) {
		window.addEventListener('load', Carousel.setup);
	} else if (window.attachEvent) {
		window.attachEvent('onload', Carousel.setup);
	} else {
		alert("Could not attach ’MovieCategories.setup’ to the ’window.onload’ event");
	}

/*
if (document.getElementById) {
	window.onload = Carousel.setup;
}*/
