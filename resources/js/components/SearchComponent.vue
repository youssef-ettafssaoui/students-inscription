
<template>
 <div>
  <input type="text" placeholder="Search formations..." v-model="keyword" v-on:keyup="searchFormations" class="form-control">
  <div class="card-footer" v-if="results.length">
    <ul class="list-group">
        <li class="list-group-item" v-for="result in results">
            <a style="color:#000;" :href=" '/formations/' + result.id +'/'+result.slug+'/'  ">{{result.title}}
                <br>
                <small class="badge badge-success">{{result.title}}</small>
            </a>

        </li>
    </ul>
  </div>

 </div>
</template>


<script>
 export default{
  data(){
    return{
        keyword:'',
        results:[],
    }
  },
  methods: {
   searchFormations(){
    this.results = [];
    if(this.keyword.length>1){
        axios.get('/formations/search',{params:{keyword:this.keyword}}).then(response=>{
            this.results = response.data;
        });
    }

  }
 }
}
</script>
