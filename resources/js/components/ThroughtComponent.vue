<template>
    <div class="col-md-8 mt-3">
        <div class="card">
            <div class="card-header">Publicado el {{ throught.create_at }}</div>
            <div class="card-body">
                <input v-if="editMode" type="text" v-model="throught.description" class="form-control">
                <p v-else>{{ throught.description }}</p>
            </div>

            <div class="card-footer">
                <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Guardar Cambios</button>
                <button v-else class="btn btn-light" v-on:click="onClickEdit()">Editar</button>
                <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
            </div>
        </div>
    </div>     
</template>


<script>
    export default {
        props:['throught'],
        data(){
            return {
                editMode: false
            };
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            onClickDelete(){
                this.$emit('delete');
            },
            onClickEdit(){
                this.editMode = true;
                this.$emit('edit');
            },
            onClickUpdate(){
                this.editMode = false;
                this.$emit('update',throught);
            }
        }
    }
</script>
