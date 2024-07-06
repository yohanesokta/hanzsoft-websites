let navbar_state = false;
const screenWidth = window.innerWidth;
console.log(screenWidth)
document.querySelector('#logo').addEventListener('click', () => {
    if (window.innerWidth > 890 || navbar_state == true) {
        window.location.href = "/Store"
    }
})

const navbar = document.querySelector('#navbar');
navbar.addEventListener('click', () => {
    if (window.innerWidth < 890) {
        if (navbar_state) {
            navbar.classList.remove('nav-drop');
            navbar_state = false;
        } else {
            navbar.classList.add('nav-drop');
            navbar_state = true;
        }
    }
})
