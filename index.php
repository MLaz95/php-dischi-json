<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./styles/general.css">
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body data-bs-theme="dark">

    <div id="app">
        <?php
        require './partials/navbar.php'
        ?>

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" v-for="(disk, index) in disks">
                    <div class="h-100" data-bs-toggle="modal" data-bs-target="#diskModal" @click="getDiskData(index)">
                        <img :src="disk.poster" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="diskModal" tabindex="-1" aria-labelledby="diskModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="card h-100 text-center" data-bs-toggle="modal" data-bs-target="#diskModal" @click="getDiskData(index)">
                        <img :src="currentDiskData.poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ currentDiskData.title }}</h5>
                            <div>{{currentDiskData.author}}</div>
                            <h4>{{currentDiskData.year}}</h4>
                        </div>
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