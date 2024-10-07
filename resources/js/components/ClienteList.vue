<template>
    <div class="row justify-content-center bg-appointment mx-0">
        <div class="container p-5 my-5">
            <h2 class="text-white text-center mb-4">Lista de Clientes</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="cliente in clientes" :key="cliente.id">
                    <td>{{ cliente.nombre }}</td>
                    <td>{{ cliente.email }}</td>
                    <td>{{ cliente.telefono }}</td>
                    <td>{{ cliente.direccion }}</td>
                    <td>
                        <button class="btn btn-outline-warning btn-sm" style="margin:10px" @click="editarCliente(cliente)">Editar</button>
                        <button class="btn btn-outline-danger btn-sm" style="margin:10px" @click="confirmarEliminacion(cliente.id)">Eliminar</button>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- Modal de Edición -->
            <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editarModalLabel">Editar Cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form @submit.prevent="actualizarCliente">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" v-model="clienteActual.nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" v-model="clienteActual.email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" v-model="clienteActual.telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" v-model="clienteActual.direccion">
                                </div>
                                <button type="submit" class="btn btn-outline-success btn-sm" >Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Eliminación -->
            <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eliminarModalLabel">Eliminar Cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas eliminar este cliente?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-outline-danger btn-sm" @click="eliminarCliente">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            clientes: [],
            clienteActual: {},
            idClienteEliminar: null,
        };
    },
    methods: {
        fetchClientes() {
            axios.get('/api/clientes').then(response => {
                this.clientes = response.data;
            });
        },
        editarCliente(cliente) {
            this.clienteActual = { ...cliente }; // Copia el cliente a editar
            const modal = new bootstrap.Modal(document.getElementById('editarModal'));
            modal.show();
        },
        actualizarCliente() {
            // Enviar todos los datos del cliente al backend
            axios.put(`/api/clientes/${this.clienteActual.id}`, this.clienteActual)
                .then(() => {
                    this.fetchClientes(); // Refrescar la lista de clientes
                    bootstrap.Modal.getInstance(document.getElementById('editarModal')).hide(); // Cerrar el modal
                })
                .catch(error => {
                    console.error('Error al actualizar el cliente:', error);
                });
        },
        confirmarEliminacion(id) {
            this.idClienteEliminar = id;
            const modal = new bootstrap.Modal(document.getElementById('eliminarModal'));
            modal.show();
        },
        eliminarCliente() {
            axios.delete(`/api/clientes/${this.idClienteEliminar}`)
                .then(() => {
                    this.fetchClientes(); // Refrescar la lista de clientes
                    bootstrap.Modal.getInstance(document.getElementById('eliminarModal')).hide(); // Cerrar el modal
                })
                .catch(error => {
                    console.error('Error al eliminar el cliente:', error);
                });
        }
    },
    mounted() {
        this.fetchClientes(); // Cargar la lista de clientes al inicio
    }
};
</script>

<style scoped>
</style>

