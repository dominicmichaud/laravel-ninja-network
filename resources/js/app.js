import "./bootstrap";

var className = "inverted";
var scrollTrigger = 60;

window.onload = () => {
    window.onscroll = function () {
        // We add pageYOffset for compatibility with IE.
        if (window.scrollY >= scrollTrigger) {
            document.getElementsByTagName("header")[0].classList.add(className);
        } else {
            document
                .getElementsByTagName("header")[0]
                .classList.remove(className);
        }
    };

    const menu = document.querySelector(".main-menu");
    const toggle = document.querySelector(".menu-btn");
    const body = document.body;

    toggle.addEventListener("click", () => {
        if (menu.classList.contains("open")) {
            menu.classList.toggle("open");
            menu.classList.add("closing");
        } else {
            menu.classList.toggle("open");
        }
        body.classList.toggle("menu-opened");
        toggle.classList.toggle("active");
    });

    menu.onanimationend = () => {
        menu.classList.remove("closing");
    };
};
