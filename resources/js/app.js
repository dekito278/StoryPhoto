require('./bootstrap');

window.Vue = require('vue');
import store from './store/index';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('buat-pameran', require('./components/BuatPameran.vue').default);
Vue.component('lihat-pameran', require('./components/LihatPameran.vue').default);

const app = new Vue({
    store,
    el: '#app',
});