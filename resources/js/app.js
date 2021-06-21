import Vue from 'vue';
import router from './router';
import App from './components/App';
import Authorization from './authorization/authorize'

require('./bootstrap');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-room', require('./views/ChatRoom.vue').default);

Vue.use(Authorization);

const app = new Vue({
    el: '#app',

    components: {
        App
    },

    router,
});

Vue.filter('two_digits', function (value) {
    if(value.toString().length <= 1)
    {
        return "0"+value.toString();
    }
    return value.toString();
});
