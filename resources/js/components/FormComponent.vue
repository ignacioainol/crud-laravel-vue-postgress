<template>
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">En que estas pensando ahora?</div>
                <div class="card-body">
                    
                    <!-- <div class="alert alert-success" role="alert">
                    </div> -->

                    <form action="">
                        <div class="form-group">
                            <label for="">Ahora estoy pensando en</label>
                            <input type="text" class="form-control" name="throught">
                        </div>

                        <button class="btn btn-primary">Enviar Pensamiento</button>
                    </form>
                </div>
            </div>
        </div>    
</template>


<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
