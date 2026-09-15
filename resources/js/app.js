import './bootstrap';
import { createApp } from 'vue';
import App from './vue/App.vue';
import Oruga from '@oruga-ui/oruga-next';
import '@oruga-ui/oruga-next/dist/oruga.css';
import '@mdi/font/css/materialdesignicons.min.css';

const app = createApp(App);

app.use(Oruga);
app.mount('#app');

app.use(Oruga, {
    iconPack: 'mdi',
});
app.use(router);
app.use(Oruga);
app.mount('#app');
