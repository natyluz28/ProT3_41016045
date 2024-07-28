<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de - Patitas Salvajes</title>
    <link rel="stylesheet" href="<?= base_url('front/styles/styles_acerca_de.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+NZ:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <img src="https://media.istockphoto.com/photos/dogs-and-cats-peeking-over-web-banner-picture-id930281684?k=6&m=930281684&s=170667a&w=0&h=XCSh-el6G1-E242Va28BHSbzrzxLF1mm2nYmEymhsoY=" alt="Animales asomándose" class="header-img">
    </header>

    <!-- Botones -->
    <div class="boton">
        <div class="container mt-4">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Ferias de adopción</button>
                <button type="button" class="btn btn-secondary">Fechas destacadas</button>
                <button type="button" class="btn btn-secondary">Sucursales</button>
            </div>
        </div>
    </div>

    <!-- Carrusel -->
    <div class="container mt-4">
        <h3>Ofrecemos diversos servicios de atención gratuita para perros y gatos sin hogar</h3>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://noticiasmanzanillo.com/wp-content/uploads/2020/11/04-11-20-esterilizacion.jpg" class="d-block w-100" alt="Esterilización gratuita">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ESTERILIZACIÓN GRATUITA</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://dam.ngenespanol.com/wp-content/uploads/2020/04/000_1QJ5Q9.jpg" class="d-block w-100" alt="Alimentación gratuita">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ALIMENTACIÓN GRATUITA</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.zoorprendente.com/wp-content/uploads/2016/07/casitas-para-perros-de-la-calle2-Copy-1-750x390.jpg" class="d-block w-100" alt="Construcción de hogares">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>CONSTRUCCIÓN DE HOGARES</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>

    <!-- Mapa y Teléfonos -->
    <div class="container mt-4 mapa-telefono">
        <div class="box1">
            <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                <script>
                    (function () {
                        var setting = {
                            "query": "Ezeiza, Buenos Aires, Argentina",
                            "width": 300,
                            "height": 400,
                            "satellite": false,
                            "zoom": 13,
                            "placeId": "ChIJX2lx983QvJURnVh_nJxNfcI",
                            "cid": "0xc27d4d9c9c7f589d",
                            "coords": [-34.8537327, -58.5228619],
                            "cityUrl": "/argentina/ezeiza-48217",
                            "cityAnchorText": "Mapa de Ezeiza, Provincia de Buenos Aires, Argentina",
                            "lang": "es",
                            "queryString": "Ezeiza, Buenos Aires, Argentina",
                            "centerCoord": [-34.8537327, -58.5228619],
                            "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                            "embed_id": "1125363"
                        };
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=1125363';
                        s.async = true;
                        s.onload = function (e) {
                            window.OneMap.initMap(setting);
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                    })();
                </script>
                <a href="https://1map.com/es/map-embed">LOCALIZACIÓN</a>
            </div>
        </div>
        <div class="box2">
            <h4>Contacto - Teléfonos</h4>
            <p>BUENOS AIRES: +54 000000</p>
            <p>CÓRDOBA: +54 000000</p>
            <p>CORRIENTES: +54 000000</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024</p>
        <div class="social">
            <h2>Social Media Icons</h2>
            <a class="fa fa-instagram" href="https://www.instagram.com/naty.luz/">naty.luzr</a>
            <a class="fa fa-yahoo" href="https://www.yahoo.com/naty.luz/">naty.luzr</a>
            <a class="fa fa-talentosdigitales" href="https://talentosdigitales.ar/">https://talentosdigitales.ar/</a>
        </div>
    </footer>
</body>
</html>
