<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./src/css/styles.css">
    <link rel="stylesheet" href="./src/css/galeria.css">
    <link rel="stylesheet" href="./src/css/scrollbar.css">

</head>

<body class="bg-light position-relative">


    <div class="fixed-top w-100 vh-100 top-0 start-0 gallery d-none">
        <div class="gallery__navbar bg-black d-flex align-items-center justify-content-between px-5 text-muted">
            <div>
                <span id="gallery_index">15</span> / <span id="gallery_amount">30</span>
            </div>
            <div>
                <p class="gallery_date text-center text-white">fecha</p>
            </div>
            <div class="h-100 gallery_close px-lg-5 d-flex align-items-center justify-content-between">
                <i class="bi bi-x-circle fs-5"></i>
            </div>
        </div>
        <div class="gallery__main d-flex align-items-center justify-content-between text-white text-center">
            <div class="h-100 d-flex align-items-center gallery__arrow__left">
                <i class="bi bi-arrow-left-short fs-1 w-100 "></i>
            </div>
            <img src="./src/img/galeria/2021-09-16_1008.jpg" alt="viewer" class="gallery_img">
            <div class="h-100 d-flex align-items-center gallery__arrow__right">
                <i class="bi bi-arrow-right-short fs-1 w-100 "></i>
            </div>
        </div>
    </div>


    <div class="overflow-hidden">
        <?php
        include("navbar.html");
        ?>
        <div class="_blur_banner position-relative">
            <div class=" bg_banner bg_blur h-100"></div>
            <h1 class="position-absolute top-50 start-50 translate-middle text-light text-shadow w-100 text-center m-0 p-0 pt-md-5 mt-5 mt-lg-0 mb-lg-5 pb-lg-5">Galería de Gato Feliz</h1>
            <img src="./src/img/wave.png" class="position-absolute bottom-0 d-none d-lg-block" style="margin-bottom:-2px;margin-left:-1rem" widht="103%" alt="Onda de decoración">
        </div>
    </div>


    <div class="text-center container my-5">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <p class="text-center">Esta galería consite en todas las mejores fotografías que que yo y mi hermana hemos ido haciendo desde que nuestro gatito Benji nació, pasando por la adopción en el Zoosanitario de Sevilla de Foskito, hasta el día de hoy. Cada una de estas fotografía tienen su fecha exacta así como una pequeña descripción de esta.</p>
                <p>Para ver el resumen de la crianza de Benji y Foskito, puede dirijirse a <a href="./quienes-somos">Quienes somos</a>.</p>
                <!-- <p class="fs-5 text-decoration-underline">Haciendo click en una imagen la puedes ver en tamaño real.</p> -->
            </div>
        </div>
    </div>
    <div class="container d-flex align-items-start">
        <img src="./src/img/arrow.png" alt="flecha" width="60px" class="ms-5">
        <span class="bg-yellow rotate p-1">Click para ver a tamaño completo</span>
    </div>
    <div class="container p-0 grid mb-5">
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-09-07_1002.jpg") no-repeat center;' alt="Primera vez que le veo" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">7 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Primera vez que le veo</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-09-14_1007.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Le primera vez que le doy biberón</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-09-14_1008.jpg") no-repeat center;' alt="Estimulando su barriguita con agua caliente" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Estimulando su barriguita con agua caliente</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-09-15_1006.jpg") no-repeat center;' alt="Mis gatos" class="imagen"></div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">15 de Septiembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-09-16_1008.jpg") no-repeat center;' alt="Cabecita enana" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">16 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Cabecita enana</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-09-17_1024.jpg") no-repeat center;' alt="Le construimos a mano una cunita" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">17 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Le construimos a mano una cunita</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-09-17_1025.jpg") no-repeat center;' alt="Su primer arenero" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">17 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Su primer arenero</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-09-20_1028.jpg") no-repeat center;' alt="Su primer Yate" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">20 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Su primer Yate</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-09-21_1001.jpg") no-repeat center;' alt="Aprendiendo a sacar las garritas" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">21 de Septiembre de 2021</p>
                    <p class="m-0 fs-5">Aprendiendo a sacar las garritas</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-03_1054.jpg") no-repeat center;' alt="Mis amigos le conocen por primera vez" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">3 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Mis amigos le conocen por primera vez</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-03_1067.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">3 de Octubre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-11_1077.jpg") no-repeat center;' alt="Le crece el buche" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">11 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Le crece el buche</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-14_1092.jpg") no-repeat center;' alt="Aprendiendo hacking" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Aprendiendo hacking</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-16_1099.jpg") no-repeat center;' alt="Su primer rascador" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">16 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Su primer rascador</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-20_1110.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">20 de Octubre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-21_1121.jpg") no-repeat center;' alt="Aprendiendo a escalar" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">21 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Aprendiendo a escalar</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-21_1122.jpg") no-repeat center;' alt="¿Ahora como bajo?" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">21 de Octubre de 2021</p>
                    <p class="m-0 fs-5">¿Ahora como bajo?</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-21_1129.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">21 de Octubre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-25_1143.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">25 de Octubre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-10-29_1166.jpg") no-repeat center;' alt="Panas" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">29 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Panas</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-10-30_1174.jpg") no-repeat center;' alt="Gato Profesor" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">30 de Octubre de 2021</p>
                    <p class="m-0 fs-5">Gato Profesor</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-03_1189.jpg") no-repeat center;' alt="Tomando el solecito" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">3 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Tomando el solecito</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-09_1221.jpg") no-repeat center;' alt="Su primera latita" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">9 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Su primera latita</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-12_1239.jpg") no-repeat center;' alt="¡LLENDO AL ZOOSANITARIO!" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">¡LLENDO AL ZOOSANITARIO!</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-12_1241.jpg") no-repeat center;' alt="¡FOSKITO ADOPTADO!" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">¡FOSKITO ADOPTADO!</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-12_1248.jpg") no-repeat center;' alt="Cogiendo confianza" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Cogiendo confianza</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-12_1247.jpg") no-repeat center;' alt="Feliz" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Feliz</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-12_1251.jpg") no-repeat center;' alt="Conociendo a mi madre" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Conociendo a mi madre</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-12_1262.jpg") no-repeat center;' alt="Ya somos amigos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Ya somos amigos</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-12_1269.jpg") no-repeat center;' alt="Conociendo a Benji" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Conociendo a Benji</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-12_1272.jpg") no-repeat center;' alt="Un poco tontito" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Un poco tontito</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-12_1274.jpg") no-repeat center;' alt="Su primera vez en el veterinario" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Su primera vez en el veterinario</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-13_1287.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">13 de Noviembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-13_1289.jpg") no-repeat center;' alt="Se están conociendo" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">13 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Se están conociendo</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-13_1300.jpg") no-repeat center;' alt="Ya son amigos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">13 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Ya son amigos</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-14_1001.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Noviembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-17_1344.jpg") no-repeat center;' alt="No me deja trabajar" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">17 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">No me deja trabajar</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-18_1353.jpg") no-repeat center;' alt="¿Gato o peluche?" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">18 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">¿Gato o peluche?</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-24_1388.jpg") no-repeat center;' alt="Primera vez que ven el fuego" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">24 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Primera vez que ven el fuego</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-25_1408.jpg") no-repeat center;' alt="Duermiendo juntitos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">25 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Duermiendo juntitos</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-26_1022.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">26 de Noviembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-11-28_1433.jpg") no-repeat center;' alt="Super amigos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">28 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Super amigos</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-11-30_1455.jpg") no-repeat center;' alt="Un CUADRO" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">30 de Noviembre de 2021</p>
                    <p class="m-0 fs-5">Un CUADRO</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-12-04_1483.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">4 de Diciembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-12-05_1487.jpg") no-repeat center;' alt="Un despertar cualquiera" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">5 de Diciembre de 2021</p>
                    <p class="m-0 fs-5">Un despertar cualquiera</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-12-06_1507.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">6 de Diciembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-12-15_1000.jpg") no-repeat center;' alt="Estatuas de decoración" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">15 de Diciembre de 2021</p>
                    <p class="m-0 fs-5">Estatuas de decoración</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-12-16_1059.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">16 de Diciembre de 2021</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2021-12-19_1061.jpg") no-repeat center;' alt="Meme" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">19 de Diciembre de 2021</p>
                    <p class="m-0 fs-5">Meme</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2021-12-20_1071.jpg") no-repeat center;' alt="Tomando el solecito" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">20 de Diciembre de 2021</p>
                    <p class="m-0 fs-5">Tomando el solecito</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2022-01-01_1970.jpg") no-repeat center;' alt="Aquí de panas" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">1 de Enero de 2022</p>
                    <p class="m-0 fs-5">Aquí de panas</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-03_1114.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">3 de Enero de 2022</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2022-01-05_1121.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">5 de Enero de 2022</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-05_1122.jpg") no-repeat center;' alt="Gordo bondiola" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">5 de Enero de 2022</p>
                    <p class="m-0 fs-5">Gordo bondiola</p>
                </div>
            </div>
        </div>
        <!-- <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url("./src/img/galeria/2022-01-05_2311.gif") no-repeat center;' alt="IBAI GATO" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">5 de Enero de 2022</p>
                    <p class="m-0 fs-5">IBAI GATO</p>
                </div>
            </div>
        </div> -->
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-06_1123.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">6 de Enero de 2022</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-08_1139.jpg") no-repeat center;' alt="Foskito saca los tanques" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">8 de Enero de 2022</p>
                    <p class="m-0 fs-5">Foskito saca los tanques</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-09_1140.jpg") no-repeat center;' alt="Construimos una mosquitera para que puediran estar en la ventana" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">9 de Enero de 2022</p>
                    <p class="m-0 fs-5">Construimos una mosquitera para que puediran estar en la ventana</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-12_1160.jpg") no-repeat center;' alt="BENJI Y FOSKITO DAN NEGATIVO EN SIDA Y LEUCEMIA" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">12 de Enero de 2022</p>
                    <p class="m-0 fs-5">BENJI Y FOSKITO DAN NEGATIVO EN SIDA Y LEUCEMIA</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-13_1161.jpg") no-repeat center;' alt="Mis gatos" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">13 de Enero de 2022</p>
                    <p class="m-0 fs-5"></p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-14_1010.jpg") no-repeat center;' alt="Se convierte en demonio" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Enero de 2022</p>
                    <p class="m-0 fs-5">Se convierte en demonio</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-14_1173.jpg") no-repeat center;' alt="Firmando acuerdos." class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">14 de Enero de 2022</p>
                    <p class="m-0 fs-5">Firmando acuerdos.</p>
                </div>
            </div>
        </div>
        <div class="item p-0 bg-dark border shadow-sm position-relative">
            <div style='background:url( "./src/img/galeria/2022-01-15_1180.jpg") no-repeat center;' alt="Dormido" class="imagen">
            </div>
            <div class="bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description">
                <div class="w-100 p-3">
                    <p class="description m-0 d-inline border-bottom">15 de Enero de 2022</p>
                    <p class="m-0 fs-5">Dormido</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.html");
    ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./src/js/gallery.js"></script>

    <script>
        // let list1 = document.getElementById("list1");
        // let list2 = document.getElementById("list2");
        // let list3 = document.getElementById("list3");
        // let jq_list1 = $("#list1");
        // let jq_list2 = $("#list2");
        // let jq_list3 = $("#list3");
        // let lists = [list1, list2, list3];
        // let html1 = "";
        // let html2 = "";
        // let html3 = "";
        // let meses = ["Enero", "Enero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Septiembre", "Octubre", "Noviembre"]
        // let window_width = window.innerWidth;
        // let columns = 0;


        // let index = 0;

        // next();

        // function next() {

        //     let currentImage = new Image();
        //     let filename = images[index][0];
        //     let fecha = filename.split(".")[0].split("-");
        //     let year = fecha[0]
        //     let month = fecha[1]
        //     let day = fecha[2].substring(0, 2);

        //     currentImage.src = './src/img/galeria/ ' + filename;
        //     currentImage.setAttribute("width", "100%");
        //     currentImage.setAttribute("class", "item p-0 bg-dark border shadow-sm position-relative");


        //     let descripcion = document.createElement("p");
        //     descripcion.className = "m-0 fs-5";
        //     descripcion.innerText = images[index][1];

        //     fecha = parseInt(day) + " de " + meses[parseInt(month)] + " de " + year;
        //     let divFecha = document.createElement("p");
        //     divFecha.className = "m-0";
        //     divFecha.innerText = fecha;

        //     let content = document.createElement("div");
        //     content.className = "bg-dark bg-opacity-75 text-light content px-2 py-1 position-absolute w-100 h-100 top-0 left-0 d-flex align-items-center text-center item-description";
        //     content.append(divFecha);
        //     content.append(descripcion);

        //     let imageContainer = document.createElement("div");
        //     imageContainer.className = "item p-0 bg-dark border shadow-sm position-relative";
        //     imageContainer.append(currentImage);
        //     imageContainer.append(content);

        //     // let list_index = Math.min(jq_list1.height(), jq_list2.height(), jq_list3.height());
        //     // lists[list_index].append(imageContainer);
        //     list1.append(imageContainer);
        //     // if (jq_list1.height() <= jq_list2.height() && jq_list1.height() <= jq_list3.height()) {
        //     // } else if (jq_list2.height() <= jq_list1.height() && jq_list2.height() <= jq_list3.height()) {
        //     //     list2.append(imageContainer);
        //     // } else if (jq_list3.height() <= jq_list1.height() && jq_list3.height() <= jq_list2.height()) {
        //     //     list3.append(imageContainer);
        //     // }

        //     // corte del bucle
        //     currentImage.onload = function() {
        //         if (++index < images.length) { // images.length
        //             setTimeout(function() {
        //                 next();
        //             }, 1);
        //             console.log(index);
        //         }
        //     }
        // }
    </script>

</body>

</html>