import './bootstrap';
import { createApp } from 'vue';
import { routes } from './routes';
import axios from 'axios';
import VueAxios from 'vue-axios'
import Swal from 'sweetalert2';

window.Swal = Swal;

import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Activity from './Components/Activity.vue'
import ActivityCRUD from './Components/ActivityCRUD.vue'

console.log(user)

createApp(Header).use(VueAxios, axios).mount("#header")
createApp(Footer).mount("#footer")
createApp(Activity).mount("#activity")
createApp(ActivityCRUD).use(routes, VueAxios, axios).mount("#activitycrud")


