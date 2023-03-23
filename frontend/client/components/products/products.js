function toggleLikedIcon(el) {
    if (img.src.includes("-h3.")) {
        img.src = img.src.replace("-h3.", ".");
    } else {
        img.src = img.src.replace(".", "-h3.");
    }
}
