import { createRouter, createWebHistory } from 'vue-router';

import ListComponent from '../vue/components/List.vue';
import SaveComponent from '../vue/components/Save.vue';

const routes = [
    {
        path: '/',
        name: 'list',
        component: ListComponent
    },
    {
        path: '/create',
        name: 'save',
        component: SaveComponent
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
