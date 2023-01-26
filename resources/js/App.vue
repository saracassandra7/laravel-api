<script>
import axios from 'axios'

export default {
    name: 'App',

    data(){
    return{
      baseUrl: 'http://127.0.0.1:8000/api/',
      projects: []
    }
  },
  methods:{
    getApi(){
      axios.get(this.baseUrl + 'projects')
      .then(result=>{
        this.projects = result.data.projects;
        console.log(result.data.projects)
      })

    }
  },
  mounted(){
    this.getApi();
  }
}

</script>

<template>
<div class="container">
    <h1 class="text-center m-3">Progetti</h1>
    <div class="row">
        <div class="col-4 mb-3" v-for="project in projects" :key="project.id">
            <div class="card" style="width: 19rem;">
               <div class="card-body text-center">
                  <h5 class="card-title">{{project.name}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Cliente: {{project.client_name}}</h6>
                  <p class="card-text">Descrizione progetto: <br> {{project.summary}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>


<style>
@import "../scss/appVue.scss";
</style>
