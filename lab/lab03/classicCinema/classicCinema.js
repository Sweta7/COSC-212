var imageList, imageIndex;

/* This Function will handle changing from one image to other */
function nextImage() {
    for (imageIndex = 0; imageIndex < imageList.length; imageIndex += 1) {
        alert(imageList[imageIndex]);
        if (imageIndex >= imageList.length-1) {
            imageIndex = 0;
        }
    }
}
/* This Function gets called on page load, and store them in 
    variables with global scope.*/
function setup() {
    imageList = [];
    imageList.push("images/Metropolis.jpg");
    imageList.push("images/Plan_9_from_outer_space.jpg");
    imageList.push("images/Vertigo.jpg");
    imageIndex = 0;
    //nextImage();
    //setInterval(nextImage, 2000);
}

if (document.getElementById ("carousel")) {
    window.onload = setup;
}

/* Function MovieCategory, which create an object containing
    three- data element and a function called makeHTML-creates string
*/
function MovieCategory(title, image, page) {
    this.title = title;
    this.image = image;
    this.page = page;
    
    this.makeHTML = function () {
        var htmlstr;
        htmlstr = ("<a href = " + page + "><figure><img src = " + image + "><figcaption>" + title + "/figcaption></figure></a>");
        return htmlstr;
    }
}



