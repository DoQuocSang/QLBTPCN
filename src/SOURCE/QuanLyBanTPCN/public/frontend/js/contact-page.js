const contactBox = document.querySelector('.contact-box');
const contactBoxCloseBtn = document.querySelector('.contact-box-close-btn');
contactBoxCloseBtn.onclick = function() {
    contactBox.classList.toggle('active');
}

