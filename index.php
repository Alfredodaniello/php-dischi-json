<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Documento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg">
    <div id="app">
        <header class="sticky-top d-flex align-items-center">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="" srcset="">
            </div>
        </header>
        <div class="container">
            <div class="row justify-content-between">
                <div class="mb-4 card bg-dark text-white" v-for="album in albums" :key="album.id">
                    <img :src="album.poster" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{album.title}}</h5>
                        <h6 class="text-center">{{album.author}}</h6>
                        <h6 class="text-center">{{album.year}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
