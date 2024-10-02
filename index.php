<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panda Foods</title>
    <link rel="stylesheet" href="src/css/style.css">
    <style>
        .special-offers {
            display: flex;
            overflow: hidden;
            position: relative;
        }

        .special-offer-card {
            margin: 0 10px;
            flex: 0 0 auto;
            text-align: center;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-light min-vh-100">
        <?php include 'src/include/header.php'; ?>
        
        <div class="row justify-content-center py-5">
            <div class="col-lg-8">
                <div class="bg-cover bg-center rounded-3" style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.5)), url('src/assets/img/Dulcesfondo.jpg');">
                    <div class="text-center p-5">
                        <h1 class="text-dark display-4">Panda Foods</h1>
                        <p class="text-dark display-8">Descubre nuestra amplia variedad de dulces y golosinas.</p>
                        <a class="btn btn-dark" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Ofertas Especiales -->
        <h2 class="text-dark text-center px-4 pb-3 pt-5">Ofertas Especiales</h2>
        <div id="specialOffersCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="special-offers justify-content-center p-4">
                        <div class="special-offer-card">
                            <div class="bg-center bg-no-repeat bg-cover rounded-xl" 
                                 style='background-image: url("https://cdn.usegalileo.ai/sdxl10/5dfca453-796d-430f-a271-7c115c531d33.png"); height: 150px;'></div>
                            <p class="text-dark">Panda Plush Toy2</p>
                            <p class="text-secondary">$15.99</p>
                        </div>
                        <div class="special-offer-card">
                            <div class="bg-center bg-no-repeat bg-cover rounded-xl" 
                                 style='background-image: url("https://cdn.usegalileo.ai/sdxl10/f5b1bd70-127e-400a-8fda-c60ac1d7afed.png"); height: 150px;'></div>
                            <p class="text-dark">Panda Backpack</p>
                            <p class="text-secondary">$29.99</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="special-offers justify-content-center p-4">
                        <div class="special-offer-card">
                            <div class="bg-center bg-no-repeat bg-cover rounded-xl" 
                                 style='background-image: url("https://cdn.usegalileo.ai/sdxl10/31e0624c-d8f4-49ad-a8b2-20c36d8b9eba.png"); height: 150px;'></div>
                            <p class="text-dark">Panda Mug2</p>
                            <p class="text-secondary">$9.99</p>
                        </div>
                        <div class="special-offer-card">
                            <div class="bg-center bg-no-repeat bg-cover rounded-xl" 
                                 style='background-image: url("https://cdn.usegalileo.ai/sdxl10/aa636961-e78a-4fae-b3ad-d446c2e379cf.png"); height: 150px;'></div>
                            <p class="text-dark">Panda Pajamas</p>
                            <p class="text-secondary">$19.99</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#specialOffersCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#specialOffersCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <?php include 'src/include/footer.php'; ?>

        <!-- Imagen en la parte inferior derecha -->
        <img src="src/assets/img/Pandaosito.png" alt="Descripción de la imagen" class="floating-image">
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
