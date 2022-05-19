<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./src/css/styles.css">

</head>

<body class="bg-light">



    <div class="overflow-hidden">
        <?php
        include("navbar.html");
        ?>
        <div class="_blur_banner position-relative">
            <div class=" bg_banner bg_blur h-100"></div>
            <h1 class="position-absolute top-50 start-50 translate-middle text-light text-shadow w-100 text-center m-0 p-0 pt-md-5 mt-5 mt-lg-0 mb-lg-5 pb-lg-5">Contacto con Gato Feliz</h1>
            <img src="./src/img/wave.png" class="position-absolute bottom-0  d-none d-lg-block" style="margin-bottom:-2px;margin-left:-1rem" widht="103%" alt="Onda de decoración">
        </div>
    </div>





    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4 py-sm-5 my-sm-5">

                <img src="./src/img/contacto.jpg" width="100%" alt="Gato con ordenador mandando un mensaje">
                <div class="fw-lighter text-center mt-4  text-secondary">
                    <p>
                        Nos encantar recibir opiniones sobre nuestra página web,
                        que noscuenten lo que os gusta y lo que no, lo que echas en falta y lo que te gustaría que cambiáramos.

                    </p>
                    <!-- <p>Gracias por colaborar con nosotros y por ayudarnos a mejorar.</p> -->
                </div>
                <div class="my-5 text-center">
                    <h3 class="text-decoration-underline">Redes Sociales</h3>
                    <div class="mt-3">
                        <i class="bi bi-instagram me-4 fs-4 text-muted"></i>
                        <i class="bi bi-facebook  me-4 fs-4 text-muted"></i>
                        <i class="bi bi-whatsapp  me-4 fs-4 text-muted"></i>
                        <i class="bi bi-messenger me-4 fs-4 text-muted"></i>
                    </div>
                </div>
                <div class="my-5 text-center">
                    <h3 class="text-decoration-underline ">Más contacto</h3>
                    <div class="pt-1">
                        <div class="my-2">
                            <i class="bi bi-telephone-fill me-2"></i><span>+34 685 80 57 42</span>
                        </div>
                        <div class="my-2">
                            <i class="bi bi-envelope-fill me-2"></i> <span>pycolmenero@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-7 offset-lg-1 mt-4 py-sm-5 my-sm-5">

                <h2>Envianos un mensaje </h2>
                <div class="separacion"></div>
                <p>Nos encanta oir a nuestos lectores. No dudes en enviarnos tu "feedback", comentarios o mejoras.</p>
                <form action="" method="post" class="form text-end">
                    <div class="d-flex bg-white border p-2 mb-3">
                        <i class="bi bi-person-fill mx-2"></i>
                        <input type="text" placeholder="Nombre" class="w-100 border-0 raounded-0 bg-white">
                    </div>
                    <div class="d-flex bg-white border p-2 mb-3">
                        <i class="bi bi-envelope-fill mx-2"></i>
                        <input type="text" placeholder="Correo Electrónico" class="w-100 border-0 raounded-0 bg-white">
                    </div>
                    <div class="d-flex bg-white border p-2 mb-3">
                        <i class="bi bi-pencil-fill mx-2"></i>
                        <textarea class="form-control bg-white border-0 p-0" rows="4" placeholder="Mensaje"></textarea>
                    </div>


                    <button class="btn bg-color2 text-light px-5 position-relative"><span class="position-absolute top-50 start-50 translate-middle calltoaction1">ENVIAR</span><span class="t-color2">ENVIAR</span></button>
                    <!-- <button class="btn bg-color2 text-light px-5 calltoaction1">ENVIAR</button> -->
                </form>

                <!-- <div class="d-block text-center text-md-start d-md-flex justify-content-evenly mt-5">
                    <div class="h-100">
                        <div class="bg-white p-4">
                            <h4 class="text-decoration-underline text-center">Redes Sociales</h4>
                            <div class=" mt-3">
                                <i class="bi bi-instagram me-4 fs-4 text-muted"></i>
                                <i class="bi bi-facebook  me-4 fs-4 text-muted"></i>
                                <i class="bi bi-whatsapp  me-4 fs-4 text-muted"></i>
                                <i class="bi bi-messenger me-4 fs-4 text-muted"></i>
                            </div>
                        </div>
                    </div>
                    <div class="h-100">
                        <div class="bg-white p-4">
                            <h4 class="text-decoration-underline text-center">Más contacto</h4>
                            <div class="pt-1">
                                <div class="my-2">
                                    <i class="bi bi-telephone-fill me-2"></i><span>+34 685 80 57 42</span>
                                </div>
                                <div class="my-2">
                                    <i class="bi bi-envelope-fill me-2"></i> <span>pycolmenero@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

    <?php
    include("footer.html");
    ?>

</body>

</html>