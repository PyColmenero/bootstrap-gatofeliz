let imagenes = $(".item");
let gallery = $(".gallery");
let gallery_img = $(".gallery_img");
let gallery_close = $(".gallery_close");
let gallery_index = $("#gallery_index");
let gallery_amount = $("#gallery_amount");
let gallery__arrow__right = $(".gallery__arrow__right");
let gallery__arrow__left = $(".gallery__arrow__left");
let gallery_date = $(".gallery_date");
let img_index = 0;
imagenes.click(function() {
    let item = $(this);
    let imagen = item.children().eq(0);
    let fecha = item.children().eq(1).children().eq(0).children().eq(0);
    console.log(fecha);
    let bg = imagen.css("background-image");
    let src = bg.slice(5, -2);
    let filename = src.slice(-19);
    // GET INDEX

    for (let x = 0; x < images.length; x++) {
        const img = images[x];
        if (img[0] == filename) {
            img_index = x;
        }
    }

    // OPEN
    gallery.removeClass("d-none");
    gallery_img.attr("src", src);
    gallery_amount.html(images.length);
    gallery_index.html(img_index + 1);
    // console.log(fecha.text);
    gallery_date.html(fecha.text())
})
gallery_close.click(function() {
    gallery.addClass("d-none");
});
gallery__arrow__right.click(function() {
    img_index = (img_index == images.length - 1) ? 0 : img_index + 1;
    gallery_img.attr("src", "./src/img/galeria/" + images[img_index][0]);
    gallery_amount.html(images.length);
    gallery_index.html(img_index + 1);
})
gallery__arrow__left.click(function() {
    img_index = (img_index == 0) ? images.length - 1 : img_index - 1;
    gallery_img.attr("src", "./src/img/galeria/" + images[img_index][0]);
    gallery_amount.html(images.length);
    gallery_index.html(img_index + 1);
})



let images = [
    ['2021-09-07_1002.jpg', 'Primera vez que le veo '],
    ['2021-09-14_1007.jpg', 'Le primera vez que le doy biberón '],
    ['2021-09-14_1008.jpg', 'Estimulando su barriguita con agua caliente '],
    ['2021-09-15_1006.jpg', ' '],
    ['2021-09-16_1008.jpg', 'Cabecita enana '],
    ['2021-09-17_1024.jpg', 'Le construimos a mano una cunita '],
    ['2021-09-17_1025.jpg', 'Su primer arenero '],
    ['2021-09-20_1028.jpg', 'Su primer Yate '],
    ['2021-09-21_1001.jpg', 'Aprendiendo a sacar las garritas '],
    ['2021-10-03_1054.jpg', 'Mis amigos le conocen por primera vez '],
    ['2021-10-03_1067.jpg', ' '],
    ['2021-10-11_1077.jpg', 'Le crece el buche '],
    ['2021-10-14_1092.jpg', 'Aprendiendo hacking '],
    ['2021-10-16_1099.jpg', 'Su primer rascador '],
    ['2021-10-20_1110.jpg', ' '],
    ['2021-10-21_1121.jpg', 'Aprendiendo a escalar '],
    ['2021-10-21_1122.jpg', '¿Ahora como bajo? '],
    ['2021-10-21_1129.jpg', ' '],
    ['2021-10-25_1143.jpg', ' '],
    ['2021-10-29_1166.jpg', 'Panas '],
    ['2021-10-30_1174.jpg', 'Gato Profesor '],
    ['2021-11-03_1189.jpg', 'Tomando el solecito '],
    ['2021-11-09_1221.jpg', 'Su primera latita '],
    ['2021-11-12_1239.jpg', '¡LLENDO AL ZOOSANITARIO! '],
    ['2021-11-12_1241.jpg', '¡FOSKITO ADOPTADO! '],
    ['2021-11-12_1248.jpg', 'Cogiendo confianza '],
    ['2021-11-12_1247.jpg', 'Feliz '],
    ['2021-11-12_1251.jpg', ' '],
    ['2021-11-12_1262.jpg', 'Ya somos amigos '],
    ['2021-11-12_1269.jpg', 'Conociendo a Benji '],
    ['2021-11-12_1272.jpg', 'Un poco tontito '],
    ['2021-11-12_1274.jpg', 'Su primera vez en el veterinario '],
    ['2021-11-13_1287.jpg', ' '],
    ['2021-11-13_1289.jpg', 'Se están conociendo '],
    ['2021-11-13_1300.jpg', 'Ya son amigos '],
    ['2021-11-14_1001.jpg', ' '],
    ['2021-11-17_1344.jpg', 'No me deja trabajar '],
    ['2021-11-18_1353.jpg', '¿Gato o peluche? '],
    ['2021-11-24_1388.jpg', 'Primera vez que ven el fuego '],
    ['2021-11-25_1408.jpg', 'Duermiendo juntitos '],
    ['2021-11-26_1022.jpg', ' '],
    ['2021-11-28_1433.jpg', 'Super amigos '],
    ['2021-11-30_1455.jpg', 'Un CUADRO '],
    ['2021-12-04_1483.jpg', ' '],
    ['2021-12-05_1487.jpg', 'Un despertar cualquiera '],
    ['2021-12-06_1507.jpg', ' '],
    ['2021-12-15_1000.jpg', 'Estatuas de decoración '],
    ['2021-12-16_1059.jpg', ' '],
    ['2021-12-19_1061.jpg', 'Meme '],
    ['2021-12-20_1071.jpg', 'Tomando el solecito '],
    ['2022-01-01_1970.jpg', 'Aquí de panas '],
    ['2022-01-03_1114.jpg', ' '],
    ['2022-01-05_1121.jpg', ' '],
    ['2022-01-05_1122.jpg', 'Gordo bondiola '],
    ['2022-01-06_1123.jpg', ' '],
    ['2022-01-08_1139.jpg', 'Foskito saca los tanques '],
    ['2022-01-09_1140.jpg', 'Construimos una mosquitera para que puediran estar en la ventana '],
    ['2022-01-12_1160.jpg', 'BENJI Y FOSKITO DAN NEGATIVO EN SIDA Y LEUCEMIA '],
    ['2022-01-13_1161.jpg', ' '],
    ['2022-01-14_1010.jpg', 'Se convierte en demonio '],
    ['2022-01-14_1173.jpg', ' '],
    ['2022-01-15_1180.jpg', 'Mimio ']
];