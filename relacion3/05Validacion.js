function mostrarCampos() {

    let tipo = document.getElementById("tipo").value;
    let campoSoporte = document.getElementById("campoSoporte");

    if (tipo == "tie") {
        campoSoporte.style.display = "block";
    } else {
        campoSoporte.style.display = "none";
    }

}

function validarFormulario() {

    let email = document.getElementById("email").value;
    let tipo = document.getElementById("tipo").value;
    let documento = document.getElementById("documento").value.toUpperCase();
    let soporte = document.getElementById("soporte").value.toUpperCase();

    let expresionEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!expresionEmail.test(email)) {
        alert("El email no es válido");
        return false;
    }

    if (tipo == "dni") {

        let expresionDNI = /^[0-9]{8}[A-Z]$/;

        if (!expresionDNI.test(documento)) {
            alert("El DNI debe tener 8 números y una letra");
            return false;
        }

        let letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        let numero = parseInt(documento.substring(0, 8));
        let letra = letras[numero % 23];

        if (documento.charAt(8) != letra) {
            alert("La letra del DNI no es correcta");
            return false;
        }

    }

    if (tipo == "nie") {

        let expresionNIE = /^[XYZ][0-9]{7}[A-Z]$/;

        if (!expresionNIE.test(documento)) {
            alert("El NIE debe tener una letra X, Y o Z, 7 números y una letra final");
            return false;
        }

        let letras = "TRWAGMYFPDXBNJZSQVHLCKE";

        let numeroNIE = documento.substring(0, 8);

        numeroNIE = numeroNIE.replace("X", "0");
        numeroNIE = numeroNIE.replace("Y", "1");
        numeroNIE = numeroNIE.replace("Z", "2");

        let numero = parseInt(numeroNIE);
        let letra = letras[numero % 23];

        if (documento.charAt(8) != letra) {
            alert("La letra del NIE no es correcta");
            return false;
        }

    }

    if (tipo == "tie") {

        let expresionNIE = /^[XYZ][0-9]{7}[A-Z]$/;
        let expresionSoporte = /^E[0-9]{8}$/;

        if (!expresionNIE.test(documento)) {
            alert("El NIE introducido no tiene un formato válido");
            return false;
        }

        if (!expresionSoporte.test(soporte)) {
            alert("El número de soporte debe empezar por E y tener 8 números");
            return false;
        }

        let letras = "TRWAGMYFPDXBNJZSQVHLCKE";

        let numeroNIE = documento.substring(0, 8);

        numeroNIE = numeroNIE.replace("X", "0");
        numeroNIE = numeroNIE.replace("Y", "1");
        numeroNIE = numeroNIE.replace("Z", "2");

        let numero = parseInt(numeroNIE);
        let letra = letras[numero % 23];

        if (documento.charAt(8) != letra) {
            alert("La letra del NIE no es correcta");
            return false;
        }

    }

    return true;

}