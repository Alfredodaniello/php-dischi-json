const app = Vue.createApp({
    data() {
        return {
            albums: []
        }
    },
    methods: {
        getDataFromApi() {
            axios.get("server.php")
                .then((response) => {
                    this.albums = response.data;
                    console.log(this.albums);
                    }
            )
        }
    },
    mounted() {
        this.getDataFromApi();
    }
})

app.mount('#app');