
var imageList, imageIndex, categoryList, categoryIndex;

/* This Function will handle changing from one image to other */
function nextImage() {
	"use strict";
    var target = document.getElementById("carousel");
    /*for (imageIndex = 0; imageIndex < imageList.length; imageIndex += 1) {
        alert(imageList[imageIndex]);
        if (imageIndex >= imageList.length-1) {
            imageIndex = 0;
        }
    }*/

   /* if (imageIndex == imageList.length) {
        imageIndex = 0;
    }
    target.innerHTML =  "<img src = " + imageList[imageIndex] + ">";
    imageIndex += 1;
}*/


    if (imageIndex == categoryList.length) {
        imageIndex = 0;
    }
    target.innerHTML = categoryList[imageIndex].makeHTML();
    imageIndex += 1;
    }

/* This Function gets called on page load, and store them in 
    variables with global scope.*/
function setup() {
    "use strict" ;
	var movie1, movie2, movie3;
 /*   imageList = [];
    imageList.push("images/Metropolis.jpg");
    imageList.push("images/Plan_9_from_Outer_Space.jpg");
    imageList.push("images/Vertigo.jpg");
    imageIndex = 0;*/
    categoryList = [];
    /*categoryList.push(new MovieCategory("Classic Films", "images/Metropolis.jpg ", "classic.html"));
    categoryList.push(new MovieCategory("Science Fiction and Horror", "images/Plan_9_from_Outer_Space.jpg", "scifi.html"));
    categoryList.push(new MovieCategory("Alfred Hitchcock", "images/Vertigo.jpg", "hitchcock.html"));*/  
    movie1 = new MovieCategory("Classic Films", "images/Metropolis.jpg ", "classic.html");
    categoryList.push(movie1);
    movie2 = new MovieCategory("Science Fiction and Horror", "images/Plan_9_from_Outer_Space.jpg", "scifi.html");
    categoryList.push(movie2);                  
    movie3 = new MovieCategory("Alfred Hitchcock", "images/Vertigo.jpg", "hitchcock.html");
    categoryList.push(movie3);
    imageIndex = 0;
    nextImage();
    setInterval(nextImage, 2000);
}



/* Function MovieCategory, which create an object containing
    three- data element and a function called makeHTML-creates string
*/
function MovieCategory(title, image, page) {
    "use strict" ;
    this.title = title;
    this.image = image;
    this.page = page;
    
    this.makeHTML = function () {
        return "<a href = " + page + "><figure><img src = " + image + "><figcaption>" + title + "</figcaption></figure></a>";
    };
}

if (document.getElementById) {
    window.onload = setup;
}



