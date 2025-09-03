<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBMAPS-lugares turisticos</title>
 <style>
    /* Estilos para el nuevo contenedor de lugares */
.lugares-contenedor {
    display: flex; /* Convierte el contenedor en un Flexbox */
    flex-wrap: wrap; /* Permite que los elementos se envuelvan a la siguiente línea si no caben */
    justify-content: center; /* Centra los elementos horizontalmente */
    gap: 20px; /* Espacio entre los elementos */
    padding: 20px;
}

.lugar-turistico {
        /* Mantiene la imagen y la info lado a lado dentro de la tarjeta */
    display: flex;
    flex-direction: column; /* Organiza el contenido en columna: imagen arriba, texto abajo */
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    width: calc(50% - 20px); /* 2 columnas en pantallas grandes */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Agrega una sombra para un efecto de tarjeta */
}

.imagen-contenedor img {
    width: 100%;
    height: auto;
    display: block;
}

    /* Puedes agregar estilos adicionales para el texto si lo necesitas */
.info-contenedor {
    padding: 15px;
    text-align: center;
}

    /* Estilos para hacer el diseño responsive */
@media (max-width: 768px) {
    .lugar-turistico {
    width: 100%; /* Una sola columna en dispositivos más pequeños */
    }
}

</style>
</head>
<header>
    <h1>Bienvenido a Lugares Turísticos</h1>
    <h2>¿Qué te gustaría visitar o explorar el día de hoy?</h2>
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
    <h2>Explorar lugares de interés, que nunca has visitado, cada lugar puede ser una experiencia nueva</h2>
    
    <div class="lugar-turistico">
        <div class="imagen-contenedor">
            <img src="URL_IMAGEN_PIEDRA.jpg" alt="La Piedra del Sol">
        </div>
        <div class="info-contenedor">
            <h2>La Piedra del Sol</h2>
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