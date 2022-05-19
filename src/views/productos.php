<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="./src/css/styles.css">
    <link rel="stylesheet" href="./src/css/buttons.css">


</head>

<body data-bs-spy="scroll" data-bs-target="#productos" data-bs-offset="0" tabindex="0" class="bg-light">



    <div class="overflow-hidden">
        <?php
        include("navbar.html");
        ?>
        <div class="_blur_banner position-relative">
            <div class=" bg_banner bg_blur h-100"></div>
            <h1 class="position-absolute top-50 start-50 translate-middle text-light text-shadow w-100 text-center m-0 p-0 pt-md-5 mt-5 mt-lg-0 mb-lg-5 pb-lg-5">Productos para gatos</h1>
            <img src="./src/img/wave.png" class="position-absolute bottom-0  d-none d-lg-block" style="margin-bottom:-2px;margin-left:-1rem" widht="103%" alt="Onda de decoración">
        </div>
    </div>




    <div class="container my-lg-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <nav id="productos" class="navbar navbar-light d-block p-3 sticky-top">
                    <div class="p-0 pt-md-5 pb-md-4 "></div>
                    <div class="ms-3">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                            <span class="fs-4">ÍNDICE</span>
                        </a>
                    </div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="#duenyos" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                <span>Para amantes de los gatos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#juguetes" class="nav-link link-dark" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                <span>Juguetes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#arenas" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                <span>Arenas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#rascadores" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                <span>Rascadores</span>
                            </a>
                        </li>
                        <li>
                            <a href="#camas" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                <span>Camas</span>
                            </a>
                        </li>

                    </ul>

            </div>
            <div class="col-12 col-lg-9">
                <!-- dueños -->
                <section id="duenyos">
                    <h2 class="mb-4">Para dueños</h2>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/ropa/mask.jpg" class="card-img-top border-bottom imagenProducto" alt="Mascarilla gatuna">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Mascarilla gatuna</h3>
                                        <p class="card-text">En estos tiempos de Covid, aunque cada vez estemos más inmunizados a él, por suerte o por desgracia la mascarilla a llegado para quedarse.</p>
                                        <p>Que mejor que llevar una mascarilla que muestre al mundo que eres amante de los gatos</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">3.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/ropa/orejas.jpg" class="card-img-top border-bottom imagenProducto" alt="Orejas de gato">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Orejas de gato</h3>
                                        <p class="card-text">Cuando vayas a una fiesta de pijamas con tus amig@s, asegurate de llevar tus arejas de gato para ser el centro de atención y la envidia de todos.</p>
                                        <p>Además son super faciles de quitar, poner y lava, así que puedes prestarselo a cualquiera.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">4.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/ropa/socks.jpg" class="card-img-top border-bottom imagenProducto" alt="Calcetines">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Calcetines</h3>
                                        <p class="card-text">Cuando es invierno, o incluso en algunos paises en cualquier epoca del año, lo mejor es tener unos calcetines gorditos que hagan de tus pies felices.</p>
                                        <p>Estos calcetines son lo ideal para el frio.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">7.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- juguetes -->
                <section id="juguetes">
                    <div class="py-3 py-xs-5"></div>
                    <h2 class="mb-4">Juguetes </h2>
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/juguetes/canyapescar.jpg" class="card-img-top border-bottom imagenProducto" alt="Caña de pescar">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Caña de pescar</h3>
                                        <p class="card-text">A los gatos en la naturaleza les encanta todo lo que se mueva rápido, dales la alegría de poder cazar a una presa en movimiento con cualqueira de estas cañas de pescar.</p>
                                        <p>Vienen con "presa" intercambiable para la caña, puedes ponerle cualquier tipo de cola o pluma y todas con sonajero.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">10.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/juguetes/raton.jpg" class="card-img-top border-bottom imagenProducto" alt="Ratones de peluche">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Ratones de peluche</h3>
                                        <p class="card-text">Las mascotas felinas son aficionadas a intentar atrapar ratones por mera diversión, con este conjunto 12 ratones de colores puedes convertir tu casa en el paraiso de los gatos.</p>
                                        <p>Todos tienen incorporado un sonrajero para que los puedas lanzar y vayan a por ellos.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">13.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/juguetes/pez.jpg" class="card-img-top border-bottom imagenProducto" alt="Pez de peluche">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Pez de peluche</h3>
                                        <p class="card-text">Todos hemos visto en la peliculas de Disney como los gatos comen o roban pescado de cualquier sitio, haz este sueños realidad con este magnífico pez de peluche.</p>
                                        <p>Te parecerá increible pero es sensible al tacto y mueve la cola como si fuera un pez real cuando el gato lo toca</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">12.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/juguetes/pelotas.jpg" class="card-img-top border-bottom imagenProducto" alt="Pelotas de Ovillo">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Pelotas de Ovillo</h3>
                                        <p class="card-text">Otra cosa que siempre veiamos en las peliculas es a los gatitos jugando con las famosas pelotas de ovillo.</p>
                                        <p>Este juguetes les encantará a tus mascotas.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">5.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


                <!-- arenas -->
                <section id="arenas">
                    <div class="py-3 py-xs-5"></div>
                    <h2 class="mb-4">Arenas </h2>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/arena/silice.png" class="card-img-top border-bottom imagenProducto" alt="Arena de sílice">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Arena de sílice</h3>
                                        <p class="card-text">Ideal para gatos asmáticos que se les dificulata respirar en areneros que echan polvo, esta arena de sílice no echa nada de polvo.</p>
                                        <p>Es la más limpia, agradable a la vista y retiene los olores de manera espectacular.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">12.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/arena/aglomerante.jpg" class="card-img-top border-bottom imagenProducto" alt="Arena aglomerante">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Arena aglomerante</h3>
                                        <p class="card-text">Si estás cansado de comprar arenas en las que no puedes recoger el pipí de tus gatitos, esta arena te ayudará, se convierte en piedra al cotacto con la horina lo que te facilitará retirarlo y tirarlas.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">9.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/arena/cat-litter-cubierto.jpg" class="card-img-top border-bottom imagenProducto" alt="Arenero cubierto">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Arenero cubierto</h3>
                                        <p class="card-text">El arenero es el lugar de mayor intimidad de tus gatitos y que mejor que dejarles un espacio cerrado en el que puedan hacer sus necesidades sin molestia alguna.</p>
                                        <p>Sin embargo, la cubierta se puede quitar en cualquier momento.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">24.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/arena/cat-litter.jpg" class="card-img-top border-bottom imagenProducto" alt="Arenero normal">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Arenero normal</h3>
                                        <p class="card-text">Para aquellos gatos más mayores y con dificultad de movimiento, o simplemente que tengan la prederencia de hacer sus necsidades sin nada encima, este arenero es fenomenal.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">18.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/arena/alfombrilla.jpg" class="card-img-top border-bottom imagenProducto" alt="Alfombrilla arenero">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Alfombrilla arenero</h3>
                                        <p class="card-text">Hay gatitos que se manchan las patitas al terminar de hacer sus necesidades, se les pega arena a las patitas y luego dejan el alrededor del arenero echo un desastre.</p>
                                        <p>Esta alfombrilla recojerá toda esa arena desperdigada para que puedas luego tirarla sin esfuerzo.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">11.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>



                <!-- rascadores -->
                <section id="rascadores">
                    <div class="py-3 py-xs-5"></div>
                    <h2 class="mb-4">Rascadores </h2>
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/rascadores/decoracion.jpg" class="card-img-top border-bottom imagenProducto" alt="Rascador decorativo">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Rascador decorativo</h3>
                                        <p class="card-text">Si eres una persona moderna que no le gusta que hayan "artimañas" por su casa, pero sin embargo adora a sus mascotas felinas, este gato es ideal para que su gato rasque sin dañar la estética.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">39.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/rascadores/horizontal.jpg" class="card-img-top border-bottom imagenProducto" alt="Rascador horizontal">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Rascador horizontal</h3>
                                        <p class="card-text">Si tu gatito está mayor y le cuesta moverse, o simplemente le gusta más rascar el suelo, este rascador es ideal por su forma y posición.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">18.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/rascadores/vertical.png" class="card-img-top border-bottom imagenProducto" alt="Rascador vertcial">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Rascador vertcial</h3>
                                        <p class="card-text">No a todos los gatos les gusta rascar en vertical y este rascador es idoneo para eso con el tronco estable en el que podrán rascar todo lo que quieran.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">16.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/rascadores/tree.webp" class="card-img-top border-bottom imagenProducto" alt="Rascador árbol">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Rascador árbol</h3>
                                        <p class="card-text">El rey de los rascadores, este gigante arbol rascador hará de tu gato el más feliz del mundo, pudiendo escalar, rascar por cualquier parte o incluso dormir en sus diferentes cuevas.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">160.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/rascadores/cactus.jpg" class="card-img-top border-bottom imagenProducto" alt="Rascador cactus">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Rascador cactus</h3>
                                        <p class="card-text">La mayoría de gatos vienen de biomas áridos, este rascador es genial para que satisfagan sus instintos de rascar como en la naturaleza.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">22.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>



                <!-- camas -->
                <section id="camas">
                    <div class="py-3 py-xs-5"></div>
                    <h2 class="mb-4">Camas </h2>
                    <div class="row">

                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/camas/cama.jpg" class="card-img-top border-bottom imagenProducto" alt="Cama">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Cama</h3>
                                        <p class="card-text">Esta cama es la más sueva que te podrás encontrar y sin ningún tipo de cuvierta para que tu gatito se siente cuando quiera.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5 text-center d-block mt-4 mb-3">18.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 position-relative">
                                <div class="overflow-hidden border-bottom">
                                    <img src="./src/img/productos/camas/cueva.jpg" class="card-img-top border-bottom imagenProducto" alt="Cama cueva">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="">
                                        <h3 class="card-title fs-4">Cama cueva</h3>
                                        <p class="card-text">Ideal para dormir de la manera más cómoda posible, esta cama totalmente tapada hará que tus gatos se sientan completamente protejidos.</p>
                                    </div>
                                    <div class="mt-auto bottom-0 w-100 start-0 px-3 pb-2 text-center text-center">
                                        <span class="fs-5  d-block mt-4 mb-3">24.99€</span>
                                        <button class="mx-auto _bg-color3 border-0 d-flex align-items-center text-white">
                                            <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                    <i class="bi bi-cart-check me-3"></i>
                                                </div>
                                            </div>
                                            <span>ADQUIRIR</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


            </div>
        </div>
    </div>

    <?php
    include("footer.html");
    ?>

</body>

</html>