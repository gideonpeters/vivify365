import Vue from 'vue'
import VueTailWind from 'vue-tailwind'
import App from './App.vue'
import store from "./store/store";
import router from "./routes/router";
import '@/assets/styles/tailwind.css'
import "@mdi/font/css/materialdesignicons.css";

Vue.config.productionTip = false

Vue.use(VueTailWind);

new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')
