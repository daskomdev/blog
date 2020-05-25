import { InertiaApp } from '@inertiajs/inertia-vue';
import Vue from 'vue';
import Axios from 'axios';

Vue.config.productionTip = false;
Vue.use(InertiaApp);

Vue.prototype.$axios = Axios;

const app = document.getElementById('app');
const files = require.context('./', true, /\.vue$/i);

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: page => files(`./Pages/${page}.vue`).default,
    },
  }),
}).$mount(app);