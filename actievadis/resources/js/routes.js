import Home from './Components/Controlpanel/Home.vue';
import AllUsers from './Components/Controlpanel/AllUsers.vue';
import CreateUser from './Components/Controlpanel/CreateUsers.vue';
import EditUser from './Components/Controlpanel/EditUsers.vue'
import AllActivity from './Components/Controlpanel/AllActivity.vue';
import CreateActivity from './Components/Controlpanel/CreateActivity.vue';
import EditActivities from './Components/Controlpanel/EditActivities.vue';

import { createRouter, createWebHistory } from 'vue-router'

export const routes = createRouter({
    history: createWebHistory(),
    routes :[
    {
        name: 'userList',
        path: '/controlpanel/users/list',
        component: AllUsers,
    },
    {
        name: 'userCreate',
        path: '/controlpanel/users/create',
        component: CreateUser
    },
    {
        name: 'userEdit',
        path: '/controlpanel/users/edit/:id',
        component: EditUser
    },
    {
        name: 'activityList',
        path: '/controlpanel/activities/list',
        component: AllActivity
    },
    {
        name: 'activityCreate',
        path: '/controlpanel/activities/create',
        component: CreateActivity
    },
    {
        name: 'activityEdit',
        path: '/controlpanel/activities/edit/:id',
        component: EditActivities
    }
]});
