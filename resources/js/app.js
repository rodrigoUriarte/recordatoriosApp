
require('./bootstrap');

window.Vue = require('vue');


Vue.component('recordatorio-component', require('./components/RecordatorioComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('misrecordatorios-component', require('./components/MisRecordatoriosComponent.vue').default);

const app = new Vue({
    el: '#app',
});