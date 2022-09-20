import './bootstrap';
import { createApp } from 'vue';
import { routes } from './routes';
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Activity from './Components/Activity.vue'
import ActivityCRUD from './Components/ActivityCRUD.vue'

import AllActivity from './components/AllActivity.vue';
import CreateActivity from './components/CreateActivity.vue';
import EditActivities from './components/EditActivities.vue';
import axios from 'axios';
import VueAxios from 'vue-axios'

// export const routes = [
//     {
//         name: 'home',
//         path: '/',
//         component: AllActivity
//     },
//     {
//         name: 'create',
//         path: '/create',
//         component: CreateActivity
//     },
//     {
//         name: 'edit',
//         path: '/edit/:id',
//         component: EditActivities
//     }
// ];

const app = createApp({})

createApp(Header).mount("#header")
createApp(Footer).mount("#footer")
// createApp(Activity).mount("#activity")
createApp(ActivityCRUD).use(routes, VueAxios, axios).mount("#activitycrud")
