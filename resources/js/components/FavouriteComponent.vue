<template>
    <div>

    <button v-if="show" @click.prevent="unsave()" class="btn btn-primary" style="width: 100%;">Annuler l'enregistrement</button>

    <button v-else @click.prevent="save()"   class="btn btn-dark" style="width: 100%;">Sauvegarder</button>
    </div>
</template>

<script>
    export default {
        props:['formationid','favorited'],

        data(){
            return{
                show:true
            }
        },

        mounted(){
           this.show =  this.jobFavorited ? true:false;

        },

        computed:{
            jobFavorited(){
                return this.favorited
            }
        },

        methods:{
            save(){
                axios.post('/save/'+this.formationid).then(response=>this.show=true).catch(error=>alert('error'))
            },
            unsave(){
                axios.post('/unsave/'+this.formationid).then(response=>this.show=false).catch(error=>alert('error'))
            }
        }

    }
</script>
