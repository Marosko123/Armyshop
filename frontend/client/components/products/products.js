function toggleIcon(likedPhoto) {
	if (likedPhoto.classList.contains('liked-photo-new')) {
		// Image source: flaticon.com
		likedPhoto.src = '../../resources/images/productDetailImages/heart6.png';
		likedPhoto.classList.remove('liked-photo-new');
	} else {
		// Image source: flaticon.com
		likedPhoto.src = '../../resources/images/productDetailImages/heart4.png';
		likedPhoto.classList.add('liked-photo-new');
	}
}

// prepared for slider

// const range1 = document.getElementById('myRange1');
// const range2 = document.getElementById('myRange2');

// range1.addEventListener('input', () => {
//   if (parseInt(range1.value) >= parseInt(range2.value)) {
//     range1.value = range2.value - 1;
//   }
// });

// range2.addEventListener('input', () => {
//   if (parseInt(range2.value) <= parseInt(range1.value)) {
//     range2.value = parseInt(range1.value) + 1;
//   }
// });
