import AllUsers from './Components/AllUsers.vue';
import CreateUser from './Components/CreateUsers.vue';
import EditUser from './Components/EditUsers.vue'
import AllActivity from './components/AllActivity.vue';
import CreateActivity from './components/CreateActivity.vue';
import EditActivities from './components/EditActivities.vue';

import { createRouter, createWebHistory } from 'vue-router'

export const routes = createRouter({
    history: createWebHistory(),
    routes :[
    {
        name: 'homeU',
        path: '/users/home',
        component: AllUsers,
    },
    {
        name: 'createU',
        path: '/users/create',
        component: CreateUser
    },
    {
        name: 'editU',
        path: '/users/edit/:id',
        component: EditUser
    },
    {
        name: 'homeA',
        path: '/activitycrud/home',
        component: AllActivity
    },
    {
        name: 'createA',
        path: '/activitycrud/create',
        component: CreateActivity
    },
    {
        name: 'editA',
        path: '/activitycrud/edit/:id',
        component: EditActivities
    }
]});