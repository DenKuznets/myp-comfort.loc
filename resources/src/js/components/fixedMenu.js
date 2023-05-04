const navbar = document.querySelector(".fixedHeader");

const mQuery = window.matchMedia('(min-width: 1165px)');


function handleWitdhChange() {
    if (mQuery.matches) {
        if (window.scrollY >= 200) {
            scrollMenu();
        }

        window.addEventListener("scroll", (e) => {
            scrollMenu();
        });
    } else {
        navbar.classList.remove("navbar_scrolled");
    }

    function scrollMenu() {
        if (scrollY > 200 && window.innerWidth >= 1165) {
            navbar.classList.add("navbar_scrolled");
        } else {
            navbar.classList.remove("navbar_scrolled");
        }
    } 
}

handleWitdhChange();

mQuery.addEventListener('change', handleWitdhChange);