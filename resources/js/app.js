import { createApp } from 'vue';

const app = createApp({});

//register the component
app.component('formulario-pessoa', require('./components/FormularioPessoa.vue').default);

app.component('formulario-produto', require('./components/FormularioProduto.vue').default);

//..HTML element to mount the Vue application
app.mount('#app');

require('./bootstrap');