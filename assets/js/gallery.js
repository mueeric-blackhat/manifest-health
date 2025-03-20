let images = document.querySelectorAll('.gallery-item img');
let lightbox = document.getElementById('lightbox');
let lightboxImg = document.getElementById('lightbox-img');
let lightboxCaption = document.getElementById('lightbox-caption');
let filterButtons = document.querySelectorAll('.filter-btn');
let currentIndex = 0;

// Open Lightbox
function openLightbox(image) {
    let src = image.src;
    let caption = image.nextElementSibling.innerText;
    lightbox.style.display = "block";
    lightboxImg.src = src;
    lightboxCaption.innerText = caption;
    currentIndex = Array.from(images).indexOf(image);
}

// Close Lightbox
function closeLightbox() {
    lightbox.style.display = "none";
}

// Change Image in Lightbox
function changeImage(step) {
    currentIndex += step;
    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    } else if (currentIndex >= images.length) {
        currentIndex = 0;
    }
    lightboxImg.src = images[currentIndex].src;
    lightboxCaption.innerText = images[currentIndex].nextElementSibling.innerText;
}

// Close Lightbox on Click Outside
lightbox.addEventListener('click', function(event) {
    if (event.target !== lightboxImg && event.target !== document.querySelector('.prev-btn') && event.target !== document.querySelector('.next-btn')) {
        closeLightbox();
    }
});

// Filter Gallery Images by Category
function filterGallery(category) {
    let items = document.querySelectorAll('.gallery-item');

    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });

    // Highlight Active Button
    filterButtons.forEach(button => {
        if (button.innerText.toLowerCase() === category || category === 'all' && button.innerText.toLowerCase() === 'all') {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
    });
}
