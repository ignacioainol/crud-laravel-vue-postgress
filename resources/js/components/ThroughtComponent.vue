<template>
    <div class="col-md-8 mt-3">
        <div class="card">
            <div class="card-header">Publicado el {{ throught.create_at }}</div>
            <div class="card-body">
                <p>{{ throught.description }}</p>
            </div>

            <div class="card-footer">
                <button class="btn btn-light">Editar</button>
                <button class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>     
</template>


<script>
    export default {
        props:['throught'],
        data(){
            return {
            };
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
