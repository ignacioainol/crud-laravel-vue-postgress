<template>
    <div class="container">
        <div class="row justify-content-center">

            <form-component @new="addThrought"></form-component>

            <throught-component 
                v-for="thought in throughts"
                :key="thought.id"
                :throught="thought"></throught-component>


        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                throughts: [{
                    'id': 1,
                    'description': 'abc',
                    'create_at': '17/07/2018'
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addThrought(thought){
                this.throughts.push(thought);
            }
        }
    }
</script>
