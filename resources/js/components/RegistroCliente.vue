<template>
    <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-6 py-5">
            <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                <h1 class="text-white text-center mb-4">Registrar Cliente</h1>
                <form @submit.prevent="registrarCliente">
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    v-model="cliente.nombre"
                                    type="text"
                                    class="form-control bg-transparent p-4 text-white"
                                    placeholder="Nombre"
                                    required="required"
                                />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    v-model="cliente.email"
                                    type="email"
                                    class="form-control bg-transparent p-4 text-white"
                                    placeholder="Email"
                                    required="required"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    v-model="cliente.telefono"
                                    type="text"
                                    class="form-control bg-transparent p-4 text-white"
                                    placeholder="Teléfono"
                                    required="required"
                                />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input
                                    v-model="cliente.direccion"
                                    type="text"
                                    class="form-control bg-transparent p-4 text-white"
                                    placeholder="Dirección"
                                    required="required"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">
                                Registrar Cliente
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cliente: {
                nombre: '',
                email: '',
                telefono: '',
                direccion: ''
            }
        };
    },
    methods: {
        async registrarCliente() {
            try {
                await axios.post('/clientes', this.cliente);
                alert('Cliente registrado con éxito');
                // Limpiar formulario después de enviar
                this.cliente = {
                    nombre: '',
                    email: '',
                    telefono: '',
                    direccion: ''
                };
            } catch (error) {
                console.error('Error registrando cliente:', error);
                alert('Hubo un problema registrando el cliente');
            }
        }
    }
};
</script>

<style scoped>

</style>

