import { createApp } from 'vue';
import axios from 'axios';
window.axios= axios;
axios.defaults.baseURL = process.env.MIX_APP_URL || 'http://localhost:8000';
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap';


// Carousel
import Carrousel from './components/carousel.vue';
createApp(Carrousel).mount('#carousel');

// Footer
import Footer from './components/footer.vue';
createApp(Footer).mount('#footer');

import RegistroCliente from './components/RegistroCliente.vue';
createApp(RegistroCliente).mount('#registrocliente');

import ClienteList from './components/ClienteList.vue';
createApp(ClienteList).mount('#clientelist');
