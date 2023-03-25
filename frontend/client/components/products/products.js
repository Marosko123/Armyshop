function toggleLikedIcon(el) {
    if (img.src.includes("-h3.")) {
        img.src = img.src.replace("-h3.", ".");
    } else {
        img.src = img.src.replace(".", "-h3.");
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
