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
import HeaderCP from './Components/Controlpanel/Header.vue'
import Home from './Components/Controlpanel/Home.vue'
import Users from './Components/Controlpanel/Users.vue'
import Activities from './Components/Controlpanel/Activities.vue'

createApp(Header).mount("#header")
createApp(Footer).mount("#footer")
createApp(Activity).mount("#activity")
createApp(Users).use(routes, VueAxios, axios).mount("#users")
createApp(Activity).use(VueAxios, axios).mount("#activity")
createApp(Activities).use(routes, VueAxios, axios).mount("#activities")
createApp(HeaderCP).use(routes).mount("#headercp")
createApp(Home).use(VueAxios, axios, routes).mount("#home")
