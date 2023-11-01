import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import sendMessage from './components/SendMessage.vue'
import chatMessage from './components/ChatMessage.vue'



const app=createApp({
    components:{
       sendMessage,
       chatMessage,

    }
});
app.mount('#app');
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
