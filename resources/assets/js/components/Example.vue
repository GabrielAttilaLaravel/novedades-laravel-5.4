<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Bienvenido, {{ name }}</div>

                    <div class="panel-body">
                        Escribe tu nombre:
                        <input name="name" v-model="name" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'name' : ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
