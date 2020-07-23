import Vue from 'vue'
import App from './App.vue'
import store from "./store/store";
import router from "./routes/router";
import '@/assets/styles/tailwind.css'
import "@mdi/font/css/materialdesignicons.css";

Vue.config.productionTip = false

new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')
