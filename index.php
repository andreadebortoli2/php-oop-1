<?php include './Partials/Head.php'; ?>

<div id="app">
    <div class="container">
        <div class="row d-flex my-5">
            <div class="col-6 g-4" v-for="product in products">
                <div class="card p-3 h-100">
                    <h3>{{product.title}}</h3>
                    <div v-if="product.type"><span>{{product.type}}</span> - <span v-if="product.type === 'Movie'">{{product.movie_length}} minutes</span><span v-if="product.type === 'TVSerie'">{{product.seasons}} season<span v-if="product.seasons > 1">s</span></span></div>
                    <div v-else style="color:white">.</div>
                    <div>Lingua: {{product.language}}</div>
                    <div>Voto: {{product.vote}}</div>
                    <template v-if="product.genre">
                        <div>
                            Genere:
                            <span v-for="(genre, i) in product.genre.genreArray">
                                {{genre}} <span v-if="i !== product.genre.genreArray.length - 1"> - </span>
                            </span>
                        </div>
                        <div>Descrizione: {{product.genre.description}}</div>
                    </template>
                    <div v-if="product.type === 'Movie'">Incassi: {{product.profits}} $</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include './Partials/Foot.php' ?>