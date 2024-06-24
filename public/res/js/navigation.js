let navbar_state = false;
document.querySelector('#logo').addEventListener('click', () => {
    window.location.href = "/Store"
})

const navbar = document.querySelector('#navbar');
navbar.addEventListener('click',()=> {
    console.log('nav keklik');
    if (navbar_state) {
        navbar.classList.remove('nav-drop');
        navbar_state = false;
    } else {
        navbar.classList.add('nav-drop');
        navbar_state = true;
    }
})
