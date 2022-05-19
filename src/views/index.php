<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./src/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <?php
    include("navbar.html");
    ?>
    <main class="bg_banner bg_main position-relative">
        <div class="container h-100 ">
            <div class="row h-100">
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center text-light">
                    <div class="_main-text p-4 rounded">
                        <h1 class="m-0">Gato Feliz</h1>
                        <p>Esta web ha sido fundada para ayudar a todos los papás y mamás de gatos en su aventura con ellos.
                            Nos enfocamos en que nadie tenga dudas sobre que producto es el mejor para la calidad de vida de sus mascotas.
                            Aquí encontrarás todo tipo de <span class="position-relative link-warning">articulos<a href="./productos" class="link-warning calltoaction">articulos</a></span> para tu gato como juguetes, rascadores, arenas, camas… He incluso ropa gatuna para ti.
                            También puedes ver nuestra <a href="./galeria" class="link-light">Galería</a> con todas las fotos y videos de nuestros propios gatitos.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="over container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 p-0 mb-4 text-center">
                <div class="card bg-light h-100 d-flex">
                    <div>
                        <div class="p-5">
                            <img src="./src/img/productos/rascadores/vertical.jpg" width="80%" alt="Gato rascando" class="rounded-circle _productos-imagen">
                        </div>

                        <h3>Rascadores</h3>
                        <div class="px-3 mb-5 fw-light _light">
                            <p>Los gatos tienen el instinto e impulso natural de rascarse para así eliminar el material viejo de sus garritas y marcar el territorio con las feromonas que dejan en su rastro.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <a href="./productos#rascadores" class="btn py-3 fw-bold text-light rounded-0 w-100 _bg-color2">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0 mb-4 text-center">
                <div class="card bg-light h-100 d-flex">
                    <div class="p-5">
                        <img src="./src/img/gatojugando.jpg" width="80%" alt="Gato jugando con plumas" class="rounded-circle _productos-imagen">
                    </div>
                    <h3>Juguetes</h3>
                    <div class="px-3 mb-5 fw-light _light text-center">
                        <p>Los felinos se entretienen cuando activas su instinto de cazadores. Los juegos de los gatitos ayudan a simular los mismos juegos o movimientos que harían si estuviesen en la calle o al aire libre.</p>
                    </div>
                    <div class="mt-auto">
                        <a href="./productos#juguetes" class="btn py-3 fw-bold text-light rounded-0 w-100 _bg-color1">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0 mb-4 text-center">
                <div class="card bg-light h-100 d-flex">
                    <div class="p-5">
                        <img src="./src/img/productos/arena/silice.png" width="80%" alt="Arena de sílice" class="rounded-circle _productos-imagen">
                    </div>
                    <h3>Arenas</h3>
                    <div class="px-3 mb-5 fw-light _light text-center">
                        <p>Una de las mejores características de los gatos para elegirlos como animal de compañía es que son practicamente autosuficientes, los cuales no necesitan mucha asistencias.</p>
                    </div>
                    <div class="mt-auto">
                        <a href="./productos#arenas" class="btn py-3 fw-bold text-light rounded-0 w-100 _bg-color2">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 p-0 mb-4 text-center">
                <div class="card bg-light h-100 d-flex">
                    <div class="p-5">
                        <img src="./src/img/productos/camas/cueva.jpg" width="80%" alt="Gato en ceuva cama de gato" class="rounded-circle _productos-imagen">
                    </div>
                    <h3>Camas</h3>
                    <div class="px-3 mb-5 fw-light _light text-center">
                        <p>¡Los gatos llegan a dormir una media de 16 horas al dia! Y tener un buen descanso es fundamental a la hora de un correcto crecimiento y esto no se consigue en cualquier lugar.
                        </p>
                    </div>
                    <div class="mt-auto">
                        <a href="./productos#camas" class="btn py-3 fw-bold text-light rounded-0 w-100 _bg-color1">Ver más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 col-md-11 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="w-100 h-100 _rounded" style="background-image: url(./src/img/b.jpg); background-size:cover; background-position:center; min-height:200px"></div>
                        <!-- <img src="./src/img/b.jpg" alt="" width="100%" class="_rounded"> -->
                    </div>
                    <div class="col-12 col-md-6 d-flex align-items-center">
                        <div class="">
                            <h2 class="text-start">¿Por qué nosotros?</h2>
                            <div class="separacion mx-0 mb-2"></div>
                            <p class="text-secondary my-4">
                                Porque somos especialistas y tenemos 9 años de experiencia.
                                Porque somos una empresa con el mejor equipo multidisciplinar consolidado desde hace años.
                                Porque contamos con servicio a toda España y Gigraltar.
                                Porque nuestros envios son gratuitos a toda la peninsula son pedido mínimo.
                                Porque la mayor parte de nuestros clientes repiten pedidos año tras año.
                                Porque ofrecemos resultados y contamos con la referencia de más de un 95% de clientes satisfechos.
                            </p>
                            <div class="row text-center">
                                <div class="col-4">
                                    <img src="./src/img/better/free-delivery.png" alt="" height="70" class="mb-4">
                                    <p class="">Envío gratis</p>
                                </div>
                                <div class="col-4">
                                    <img src="./src/img/better/review.png" alt="" height="70" class="mb-4">
                                    <p class="">Mejores Rates</p>
                                </div>
                                <div class="col-4">
                                    <img src="./src/img/better/fast-delivery.png" alt="" height="70" class="mb-4">
                                    <p class="">Entraga rápida</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 mb-5">
        <h2>Estás en buenas manos</h2>
        <h3 class="fs-6 text-center fw-light mb-5">Trabajamos para conseguir la confianza de nuestros clienes.</h3>

        <div class="row pt-4">
            <div class="col-12 col-md-4 d-flex align-items-center">
                <div class="comment bg-light rounded p-4 position-relative shadow opacity-75 mb-5">
                    <img src="https://assets.hostinger.com/images/why-us-2020/upsidedown-quote-41f3503323.svg" alt="" class="opacity-75 position-absolute" style="top:-2rem; left:2rem">
                    <h3 class="px-2 fs-5 mt-2 mb-0">Arenero cubierto</h3>
                    <p>Llevaba mucho tiempo esperando por un arenero como éste, fácil de limpiar y se monta en un plis, no tiene ninguna dificultad y cuando los gatos entran a hacer sus necesidades por mucho que escarben en la arena no sale ni una grano de dentro. Maravilloso producto.</p>
                    <div class="text-end mt-4"> <b class="fs-5">Javier Maroto</b></div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="comment bg-light rounded p-4 position-relative shadow mb-5">
                    <img src="https://assets.hostinger.com/images/why-us-2020/upsidedown-quote-41f3503323.svg" alt="" class="position-absolute" style="top:-2rem; left:2rem">
                    <h3 class="px-2 fs-5 mt-2 mb-0">Cama para gatos</h3>
                    <p class="p-2">Una cama para gatos estupenda. Mi gato tiene solo 6 semanas y duerme casi todo el día. Se despierta, juega come y cuando está cansado se va solito a la cama y se queda dormido. Las primeras veces le metía una mantita para que estuviera más arropado, porque es muy pequeñito, pero ya no hace falta. Un gran acierto.</p>
                    <div class="text-end mt-4 p-2"> <b class="fs-5">Amador Rivas</b></div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-center">
                <div class="comment bg-light rounded p-4 position-relative shadow opacity-75 mb-5">
                    <img src="https://assets.hostinger.com/images/why-us-2020/upsidedown-quote-41f3503323.svg" alt="" class="opacity-75 position-absolute" style="top:-2rem; left:2rem">
                    <h3 class="px-2 fs-5 mt-2 mb-0">Rascador Cactus</h3>
                    <p>Las diferentes texturas hacen toda la diferencia, a mi gato le ha encantado el rascador, ya ha olvidado totalmente de rascar mi sofa. Y por estar en el salón al menos pone una belleza con el decorativo de cactus y no solo un palo con cuerdas.</p>
                    <div class="text-end mt-4"> <b class="fs-5">Judith Becker</b></div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid p-0 py-5 my-5">
        <h2>Visita nuestra <a href="./galeria" class="link-dark"> Galería</a></h2>
        <h4 class="fs-6 text-center fw-light mb-4">Date un paseo por la historia completa desde que nació Benji y la adopción de su hermanito Foskito.</h4>
        <div class="row w-100 m-0 p-0">
            <div class="col-12 col-lg-6 m-0 p-0">
                <div class="d-flex w-100 overflow-hidden">
                    <div class="imagen" style='background:url("./src/img/galeria/2021-09-07_1002.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Primera vez que le veo</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-09-30_1047.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Relajado</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-09-15_1006.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Con papá</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-lg-none m-0 p-0">
                <div class="d-flex w-100 overflow-hidden">
                    <div class="imagen" style='background:url("./src/img/galeria/2021-11-03_1189.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Tomando el sol</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-11-12_1251.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Con la abuela</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-11-13_1289.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Jugando</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 m-0 p-0">
                <div class="d-flex w-100 overflow-hidden ">
                    <div class="imagen" style='background:url("./src/img/galeria/2021-12-06_1507.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Diferencias</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-12-16_1059.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">En brazos</p>
                        </div>
                    </div>
                    <div class="imagen" style='background:url("./src/img/galeria/2021-12-20_1071.jpg") no-repeat center;'>
                        <div class="hidden_desc d-flex align-items-center w-100 h-100 bg-dark bg-opacity-50">
                            <p class="text-center w-100 text-light fw-bold fs-6 px-4">Tomando el sol</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="text-center mt-4">
            <a href="./galeria" class="link-green calltoaction text-decoration-none fw-bold">Visitar la Galeria </a>
        </div> -->

    </div>


    <div class="container">
        <h2>Visita nuestra <a href="./sobre-nosotros" class="link-dark"> Historia</a></h2>
    </div>
    <div class="bg-light">
        <div class="container pt-2 mt-5">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row my-3   py-4 px-2">

                        <div class="col-12 col-lg-7 d-flex align-items-center">
                            <div class="text-justify">
                                <h2 class="text-start fs-2 ms-3">El inicio.</h2>
                                <p>Soy <span class="fw-bold">Alejandro Colmenero Moreno</span>, el fundador de esta página web. En agosto del año 2021, mi hermana Carolina se encontró a un cachorro de gato abandonado en una caja de cartón. </p>
                                <p>Ella logró que lo pudieramos adoptar y ese mismo dia fueron a comprar la leche necesaria para dar nutrientes al gatito. Pocos dias despues decidió que lo llamaría <b>Benji</b>. </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 text-center px-4">
                            <img src="./src/img/galeria/2021-09-14_1008.jpg" alt="Foto de mi gato de 2 semanas" width="100%" class="_inner_border">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center mt-2 mb-5 fw-bold"><a href="./quienes-somos" class="link-green">Seguir leyendo</a></p>

    <div class="py-5"></div>


    <?php
    include("footer.html");
    ?>


    <script src="./src/js/index.js"></script>

</body>

</html>