<script>
import axios from 'axios'

export default {
    name: 'Projects',

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
            <div class="card" id="my-card" style="width: 19rem;">
               <div class="card-body text-center">
                  <h5 class="card-title m-2">
                    <router-link :to="{name: 'detail', params:{slug: project.slug} }">{{project.name}}</router-link>
                  </h5>
                  <h6 class="card-subtitle m-2 text-muted">Cliente: {{project.client_name}}</h6>
                  <!-- <p class="card-text">Descrizione progetto: <br> {{project.summary}}</p> -->
                </div>
            </div>
        </div>
    </div>
</div>

</template>


<style lang="scss" scoped>
#my-card{
    background-color: rgba(255, 255, 255, 0.781);
    border: 1px solid rgba(0, 255, 255, 0.678)
}

a{
    color: darkblue;
    text-decoration: none;
    text-transform: uppercase;
    &:hover,
    &.active{
        color: aqua;
    }

}

</style>
