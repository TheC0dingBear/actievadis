import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue'
import Footer from './components/Footer.vue'

createApp(Footer).mount("#footer")
createApp(App).mount("#app")
