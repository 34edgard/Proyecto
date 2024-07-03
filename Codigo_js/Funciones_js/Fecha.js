// Función para establecer una cookie
function setCookie(nombre, valor, expiracionDias) {
    var fechaExpiracion = new Date();
    fechaExpiracion.setDate(fechaExpiracion.getDate() + expiracionDias);

    var cookieValor = nombre + "=" + valor + "; expires=" + fechaExpiracion.toUTCString() + "; path=/";
    document.cookie = cookieValor;
}

// Ejemplo de uso
setCookie("miCookie", "valorDeLaCookie", 7); // La cookie expirará en 7 días