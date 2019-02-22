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
		var element = document.getElementById("carousel");
		element.innerHTML = categoryList[categoryIndex].makeHTML();
		categoryIndex +=1;
		if(categoryIndex >= categoryList.length){
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
		categoryList.push(new MovieCategory("Room1", "images/room1.jpg ", "Room 1"));
		categoryList.push(new MovieCategory("Room2", "images/room2.jpg", "Room 2"));
		categoryList.push(new MovieCategory("Room3", "images/room3.jpg", "Room 3 "));
		nextCategory();
      	setInterval(nextCategory, 2000);
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
