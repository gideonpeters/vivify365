import Vue from 'vue'
import VueTailWind from 'vue-tailwind'
import axios from 'axios'
import VueSocialSharing from 'vue-social-sharing'
import App from './App.vue'
import store from "./store/store";
import router from "./routes/router";
import '@/assets/styles/tailwind.css'
import "@mdi/font/css/materialdesignicons.css";
import VuePlyr from 'vue-plyr';
// import 'vue-plyr/dist/vue-plyr.css';

Vue.config.productionTip = false
axios.defaults.baseURL = process.env.VUE_APP_API_URI;


Vue.use(VuePlyr)
Vue.use(VueSocialSharing);
Vue.use(VueTailWind);

new Vue({
  store,
  axios,
  router,
  render: h => h(App),
}).$mount('#app')
