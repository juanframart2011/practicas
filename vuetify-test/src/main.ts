import Vue from 'vue';
import './plugins/vuetify'
import App from './App.vue';
import router from './router';
import store from './store';
import './registerServiceWorker';
// index.js or main.js
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader

// main.styl
import '~vuetify/src/stylus/main' // Ensure you are using stylus-loader

// my-project/src/index.js
import 'babel-polyfill';
new Vue()

import Vuetify from 'vuetify';

Vue.use(Vuetify)

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount('#app');
