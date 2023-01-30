<script>
import axios from 'axios'
export default {
    name: 'ProjectDetail',

    data(){
       return{
          baseUrl: 'http://127.0.0.1:8000/api/',
          project: {}
        }
    },

    methods:{
        getApi(){
            axios.get(this.baseUrl + 'projects/' + this.$route.params.slug)
            .then(result => {
                console.log(this.$route.params.slug);
                this.project = result.data
                console.log(result.data);
            })
        }
    },

    mounted(){
        this.getApi();
    }

}
</script>

<template>

<div class="container d-flex justify-content-center">
    <div class="card m-5 text-center" style="width: 50vw;">
        <h2>{{project.name}}</h2>
        <img :src="project.cover_image" class="card-img-top" :alt="project.name">

        <div class="card-body">
          <h5 class="card-title">Cliente: {{project.client_name}}</h5>
          <div v-if="project.type">Tipologia di progetto: {{project.type.name}}</div>

          <span v-for="technology in project.technologies" :key="technology.id">{{technology.name}}</span>

          <p class="card-text">Descrizione progetto: <br>{{project.summary}}</p>
         <router-link class="btn btn-primary" :to="{name: 'projects'}">Indietro</router-link>
        </div>
    </div>

</div>

</template>


<style lang="scss">

</style>
