let text = document.getElementById('text');
let text1 = document.getElementById('text1');
let birds = document.getElementById('birds');
let forest = document.getElementById('forest');
let mount = document.getElementById('mount');

window.addEventListener('scroll', function() {
    let value = window.scrollY;

    birds.style.left = value + 'px';
    text.style.right = value * 2 + 'px';
    text1.style.right = value * 2 + 'px';

});


