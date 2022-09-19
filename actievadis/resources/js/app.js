import './bootstrap';
import { createApp } from 'vue';
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import Activity from './Components/Activity.vue'
import ActivityCRUD from './Components/ActivityCRUD.vue'

createApp(Header).mount("#header")
createApp(Footer).mount("#footer")
createApp(Activity).mount("#activity")
createApp(ActivityCRUD).mount("#activitycrud")
