<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBMAPS-lugares turisticos</title>
    <style>
        .navegacion {
            background-color: #333;
            overflow: hidden;
        }
        .navegacion a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navegacion a:hover {
            background-color: #575757;
        }
    </style>

</style>
</head>
<header>
    
    <h1>Bienvenido a Hoteles</h1>
    <h2>¿Quieres relajarte, estar tranquilo y con la mejor experiencia?</h2>
    <h2>En Puerto Boyacá tenemos multiples hoteles para que disfrutes de tus vacaciones sin preocupaciones. </h2>
    <nav class="navegacion">
    <a href="{{ url('/') }}">Inicio</a>
    <a href="{{ url('/lugares') }}">Lugares Turísticos</a>
    <a href="{{ url('/eventos') }}">Eventos</a>
    <a href="{{ url('/hoteles') }}">Hoteles</a>
    <a href="#">¿Por qué se creo PB-MAPS?</a>
</nav>
</header>
<body>
    <div class="contenedor_1"></div>
    <h2>Explorar y busca tu proximo lugar de descanso, con todas las comodidades que te mereces</h2>
    
    <div class="lugar-hoteles">
        <div class="imagen-contenedor">
            <img src="URL_IMAGEN_PIEDRA.jpg" alt="Hotel Santa Barbara +">
        </div>
        <div class="info-contenedor">
            <h2>Hotel Santa Barbara +</h2>
            <p>El Hotel Santa Barbara + ofrece una experiencia de lujo con todas las comodidades modernas. Disfruta de nuestras habitaciones espaciosas, piscina y restaurante.</p>
            <p>La Piedra del Sol es un monumento histórico ubicado en el corazón de la ciudad. Es un destino popular para los amantes de la historia y ofrece vistas panorámicas impresionantes.</p>
            <a href="#">Ver ubicación</a>
        </div>
    </div>

    <div class="lugar-turistico">
        <div class="imagen-contenedor">
            <img src="URL_IMAGEN_PUENTE.jpg" alt="Puente del Amor">
        </div>
        <div class="info-contenedor">
            <h2>Puente del Amor</h2>
            <p>El Puente del Amor es un lugar icónico, conocido por sus hermosos atardeceres y su arquitectura. Es el sitio perfecto para una caminata romántica.</p>
            <a href="#">Ver ubicación</a>
        </div>
    </div>
    
</body>
</html>