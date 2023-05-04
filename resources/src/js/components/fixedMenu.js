(() => {
    const navbar = document.querySelector(".fixedHeader");

    const mQuery = window.matchMedia('(min-width: 1065px)')

    if (mQuery.matches) {
        if (window.scrollY >= 200) {
            scrollMenu();
        }

        window.addEventListener("scroll", (e) => {
            scrollMenu();
        });
    } 

    function scrollMenu () {
        if(scrollY > 200) {
            navbar.classList.add("navbar_scrolled");
        } else {
            navbar.classList.remove("navbar_scrolled");
        }
    } 
})()
