<?php include './Partials/Head.php'; ?>

<div id="app">
    <div class="container">
        <div class="row d-flex my-5">
            <div class="col-6 g-4" v-for="product in products">
                <div class="card p-3 h-100">
                    <h3>{{product.title}}</h3>
                    <div v-if="product.type"><span>{{product.type}}</span> - <span v-if="product.type === 'Movie'">{{product.movie_length}} minutes</span><span v-if="product.type === 'TVSerie'">{{product.seasons}} season<span v-if="product.seasons > 1">s</span></span></div>
                    <div>Lingua: {{product.language}}</div>
                    <div v-if="product.vote !== null">voto: {{product.vote}}</div>
                    <div v-else style="color:white">.</div>
                    <div>Genere: {{product.genre.name}}</div>
                    <div>Dsecrizione: {{product.genre.description}}</div>
                    <div v-if="product.type === 'Movie'">Incassi: {{product.profits}} $</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include './Partials/Foot.php' ?>