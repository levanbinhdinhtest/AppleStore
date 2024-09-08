import { createRouter, createWebHistory } from 'vue-router';
import customers from './customers.js';

const routes = [...customers];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;