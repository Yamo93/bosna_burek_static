// Minskar huvudmenyns padding när man scrollar ner för sidan
window.addEventListener('scroll', function() {
    if (window.scrollY === 0) {
        document.querySelector('.navbar').classList.remove('shrinknavbar');
    } else {
        document.querySelector('.navbar').classList.add('shrinknavbar');
    }
});