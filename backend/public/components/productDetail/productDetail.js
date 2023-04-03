onAddToBasketClicked = (event) => {
    // TODO: create popup added to basket
};

onLikedClicked = (event) => {
    // TODO: change to next heart
};





function toggleIcon(likedPhoto) {
    if (likedPhoto.classList.contains("liked")) {
        // Image source: flaticon.com
        likedPhoto.src = "../../resources/images/productDetailImages/heart6.png";
        likedPhoto.classList.remove("liked");

    
    } else {
        // Image source: flaticon.com
        likedPhoto.src = "../../resources/images/productDetailImages/heart4.png";
        likedPhoto.classList.add("liked");

        // 
    }
}