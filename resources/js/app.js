
require('./bootstrap');

window.Vue = require('vue');

Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('throught-component', require('./components/ThroughtComponent.vue').default);

const app = new Vue({
    el: '#app'
});
