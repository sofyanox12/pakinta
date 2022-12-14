function optionClick(element) {
    setTimeout(function () {
        element.blur();

    }, 300);

}

function navButtonClick(element) {
    if (element.className.indexOf(" nav-button-active") > -1) {
        element.className = element.className.replace(" nav-button-active", "");
    } else {
        element.blur();
        element.className += " " + "nav-button-active";
        console.log(element.className);
    }

}