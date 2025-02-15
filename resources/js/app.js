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
};
