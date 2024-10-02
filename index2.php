<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panda Foods</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            height: 100%; /* Asegura que el cuerpo y el html ocupen toda la altura */
            margin: 0; /* Elimina márgenes predeterminados */
            overflow-x: hidden; /* Oculta el desbordamiento horizontal */
        }

        .container-fluid {
            padding: 0; /* Elimina el padding del contenedor para que ocupe todo el ancho */
        }

        .floating-image {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 200px; /* Ajusta el tamaño según sea necesario */
            max-width: 100%; /* Asegura que la imagen no cause desbordamiento */
            z-index: 10; /* Asegúrate de que esté encima de otros elementos */
        }

        /* Oculta la imagen en dispositivos móviles */
        @media (max-width: 768px) {
            .floating-image {
                display: none;
            }
        }

        .special-offers {
            overflow-x: auto; /* Permite desplazamiento horizontal */
            white-space: nowrap; /* Evita el salto de línea */
        }

        .special-offer-card {
            display: inline-block; /* Hace que los elementos se alineen en línea */
            width: 200px; /* Ajusta el ancho de cada tarjeta según sea necesario */
            margin-right: 20px; /* Espacio entre las tarjetas */
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-light min-vh-100">
        <?php include 'header.php'; ?>
        
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <div class="bg-cover bg-center rounded-3" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.5)), url('./assets/images/candy-house-2.webp');">
                    <div class="text-center p-5">
                        <h1 class="text-dark display-4">Panda Foods</h1>
                        <p class="text-secondary">Descubre nuestra amplia variedad de dulces y golosinas.</p>
                        <a class="btn btn-dark" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Ofertas Especiales -->
        <h2 class="text-[#131416] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Special Offers</h2>
        <div class="special-offers p-4">
            <div class="special-offer-card">
                <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                     style='background-image: url("https://cdn.usegalileo.ai/sdxl10/5dfca453-796d-430f-a271-7c115c531d33.png"); height: 150px;'></div>
                <p class="text-[#131416] text-base font-medium">Panda Plush Toy</p>
                <p class="text-[#6c737a] text-sm font-normal">$15.99</p>
            </div>
            <div class="special-offer-card">
                <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                     style='background-image: url("https://cdn.usegalileo.ai/sdxl10/f5b1bd70-127e-400a-8fda-c60ac1d7afed.png"); height: 150px;'></div>
                <p class="text-[#131416] text-base font-medium">Panda Backpack</p>
                <p class="text-[#6c737a] text-sm font-normal">$29.99</p>
            </div>
            <div class="special-offer-card">
                <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                     style='background-image: url("https://cdn.usegalileo.ai/sdxl10/31e0624c-d8f4-49ad-a8b2-20c36d8b9eba.png"); height: 150px;'></div>
                <p class="text-[#131416] text-base font-medium">Panda Mug</p>
                <p class="text-[#6c737a] text-sm font-normal">$9.99</p>
            </div>
            <div class="special-offer-card">
                <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                     style='background-image: url("https://cdn.usegalileo.ai/sdxl10/aa636961-e78a-4fae-b3ad-d446c2e379cf.png"); height: 150px;'></div>
                <p class="text-[#131416] text-base font-medium">Panda Pajamas</p>
                <p class="text-[#6c737a] text-sm font-normal">$19.99</p>
            </div>
        </div>

        <footer class="bg-light text-center py-3">
            <p class="text-dark">© 2024 Panda Foods. Todos los derechos reservados.</p>
        </footer>

        <!-- Imagen en la parte inferior derecha -->
        <img src="img/Pandaosito.png" alt="Descripción de la imagen" class="floating-image">
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
