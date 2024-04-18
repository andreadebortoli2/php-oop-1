<!doctype html>
<html lang="en">

<head>
    <title>php-oop-1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div id="app">
        <div class="container">
            <div class="row d-flex my-5">
                <div class="col-6" v-for="product in products">
                    <div class="card p-3 h-100">
                        <h3>{{product.title}}</h3>
                        <p>Lingua: {{product.language}}</p>
                        <p v-if="product.vote !== null">voto: {{product.vote}}</p>
                        <p v-else style="color:white">.</p>
                        <p>Genere: {{product.genre.name}}</p>
                        <p>Dsecrizione: {{product.genre.description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>