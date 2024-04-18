const { createApp } = Vue

createApp({
    data() {
        return {
            products: [],
        }
    },
    mounted() {
        axios.get('./database/db.php').then(response => {
            console.log(response.data);
            this.products = response.data;
        }).catch(err => {
            console.log(err.message);
        })
    }
}).mount('#app')