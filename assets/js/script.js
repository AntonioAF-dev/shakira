function openWhatsApp() {
    var phoneNumber = "929430523"; // Reemplaza con el número de teléfono deseado, con el código del país sin el signo +
    var message = "Este es un mensaje de prueba. :)";
    var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

    window.open(url, "_blank");
}

window.onscroll = function () {
    var logoNombre = document.getElementById("logo-nombre");
    var navbarContainer = document.getElementById("navbar-container");

    if (window.pageYOffset > 50) {
        logoNombre.style.opacity = "0";
        navbarContainer.style.top = "0";
    } else {
        logoNombre.style.opacity = "1";
        navbarContainer.style.top = "auto";
    }
};
