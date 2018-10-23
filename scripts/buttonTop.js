// When the user scrolls down 63px (height of nav bar) from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 63 || document.documentElement.scrollTop > 63) {
        document.getElementById("button-top").style.display = "block";
    } else {
        document.getElementById("button-top").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}