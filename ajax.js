XMLHttpRequest - AJAX

Petición Servidor - Asincrónica

var respuesta;
$.get('pagina.php', function (resp) {
	respuesta = resp;
});
console.log(respuesta); --> undefined // no se debe poner en la siguiente linea inmediata porque retornara indefino.