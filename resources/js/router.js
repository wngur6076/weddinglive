import Vue from 'vue';
import VueRouter from 'vue-router';
import Start from './views/Start';
import ChatRoom from './views/ChatRoom';
import WeddingHall from './views/WeddingHall';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/', name: 'home', component: Start,
        },
        {
            path: '/chat-room', name: 'ChatRoom', component: ChatRoom,
        },
        {
            path: '/wedding-hall', name: 'WeddingHall', component: WeddingHall,
        },
    ]
});
