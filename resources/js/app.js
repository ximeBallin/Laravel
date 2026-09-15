import './bootstrap';
import { createApp } from 'vue';
import App from './vue/App.vue';
import Oruga from '@oruga-ui/oruga-next';
import '@oruga-ui/oruga-next/dist/oruga.css';

const app = createApp(App);

app.use(Oruga);
app.mount('#app');
