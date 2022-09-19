import AllActivity from './components/AllActivity.vue';
import CreateActivity from './components/CreateActivity.vue';
import EditActivities from './components/EditActivities.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllActivity
    },
    {
        name: 'create',
        path: '/create',
        component: CreateActivity
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditActivities
    }
];
