<template>
    <div class="container">
        <ul class="list-group">
            <li class="list-group-item" v-for="realisation in realisations" :key="realisation.id">{{ realisation.name }}</li>
        </ul>
    </div>
</template>
<script>
export default {

    data(){
        return{
            realisations : {}
        }
    },

    created(){
        axios.get('/projects2')
        .then((response)=> {
            this.realisations = response.data;
            console.log(this.realisations);

        })
        .catch((error)=> console.log('There was an error: '));

    },

    mounted(){
        console.log("mounted");
    }
}
</script>
