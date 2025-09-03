<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBMAPS</title>
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
</head>
<header>
    <h1>Bienvenido a PB-MAPS</h1>
    <nav class="navegacion">
        <a href="{{ url('/lugares') }}">Lugares Turísticos</a>
        <a href="#">Eventos</a>
        <a href="#">Hoteles</a>
        <a href="#">¿Por qué se creo PB-MAPS</a>
    </nav>
</header>
<body>
    
</body>
</html>