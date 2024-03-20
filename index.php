<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body data-bs-theme="dark">

    <div id="app" style="background-color: #1D2D3C;">
        <?php
            require './partials/navbar.php'
        ?>

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" v-for="disk in disks">
                    <div class="card h-100 text-center" style="background-color: #112030;">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ disk.title }}</h5>
                            <div>{{ disk.author }}</div>
                            <h4>{{ disk.year }}</h4>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- my script -->
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>