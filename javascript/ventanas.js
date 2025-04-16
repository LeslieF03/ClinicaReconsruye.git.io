
function Ventana(url,alto,ancho) {
    let pagina=url;
    let izquierda = (window.screen.width - ancho) / 2;
    let arriba = (window.screen.height - alto) / 2;
    window.open(url, 'nuevaVentana', `width=${ancho},height=${alto},top=${arriba},left=${izquierda}`);
}
