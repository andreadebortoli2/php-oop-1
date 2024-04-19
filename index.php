<?php include './Partials/Head.php'; ?>

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

<?php include './Partials/Foot.php' ?>