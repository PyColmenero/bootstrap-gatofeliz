<?php

$request = $_SERVER['REQUEST_URI'];
// get real URI
$request = explode("/",$request);
$request = $request[Count($request)-1];

switch ($request) {
    case '/':
        require './src/views/index.php';
        break;
    case '':
        require './src/views/index.php';
        break;
    case 'productos':
        require './src/views/productos.php';
        break;
    case 'galeria':
        require './src/views/gallery.php';
        break;
    case 'contacto':
        require './src/views/contacto.php';
        break;
    case 'quienes-somos':
        require './src/views/about-us.php';
        break;
    default:
        http_response_code(404);
        require './src/views/404.html';
        break;
}