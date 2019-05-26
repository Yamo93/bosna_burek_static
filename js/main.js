console.log('test');

window.addEventListener('scroll', function() {
    console.log('lol');
    if (window.scrollY === 0) {
        document.querySelector('.navbar').classList.remove('shrinknavbar');
    } else {
        document.querySelector('.navbar').classList.add('shrinknavbar');
    }
});