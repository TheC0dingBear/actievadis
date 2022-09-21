import AllActivity from './components/AllActivity.vue';
import CreateActivity from './components/CreateActivity.vue';
import EditActivities from './components/EditActivities.vue';

import { createRouter, createWebHistory } from 'vue-router'

export const routes = createRouter({
    history: createWebHistory(),
    routes :[
    {
        name: 'home',
        path: '/activitycrud/home',
        component: AllActivity
    },
    {
        name: 'create',
        path: '/activitycrud/create',
        component: CreateActivity
    },
    {
        name: 'edit',
        path: '/activitycrud/edit/:id',
        component: EditActivities
    }
]});