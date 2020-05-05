<template>
    <form v-on:submit.prevent="createIdea">                       
        <table class="table table-striped table-hover">
        <h5>1. Actualmente presentas alguno de los siguientes malestares:</h5>

        <thead>
            <th>title</th>
            <th>SI</th>
            <th>NO</th>
        </thead>
        <tbody>
           <tr v-for="aws in answers">
                <td>
                    {{aws.answer}}
                </td>
                <td>
                    <input type="radio"  value="1" v-bind:name="aws.id" :checked="aws.value ? 'checked': ''">
                </td>
                <td>
                    <input type="radio" value="0" v-bind:name="aws.id" :checked="aws.value ? '': 'checked'">
                </td>
           </tr>
        </tbody>
    </table>  
    <button type="submit" class="btn btn-primary">Siguiente</button>                
</form>           
</template>

<script>
import axios from 'axios'

export default {
    data() {
        return {
            answers: [],
            newIdea: '',
        }
    },
    created:  function(){
        this.getAnswers();
    },
    methods:{
        getAnswers: function(){
            var urlAnswers = 'answers';
            axios.get(urlAnswers).then(response => {
                this.answers = response.data
            });
        },
        createIdea: function(){
            var url = 'guardar-idea';
                axios.post(url,{
                    value: this.newIdea
                }).then(response =>{
                    console.log(response);
                    // this.getAnswers();
                    // this.newIdea = '';

                })
        }
    
    }

   
}


</script>
