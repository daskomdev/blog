import { InertiaApp } from '@inertiajs/inertia-vue';
import Vue from 'vue';
import 'froala-editor/js/plugins.pkgd.min.js';
import 'froala-editor/js/third_party/embedly.min';
import 'froala-editor/js/third_party/font_awesome.min';
import 'froala-editor/js/third_party/spell_checker.min';
import 'froala-editor/js/third_party/image_tui.min';
import 'froala-editor/css/froala_editor.pkgd.min.css';
import VueFroala from 'vue-froala-wysiwyg';
Vue.use(VueFroala);
Vue.config.productionTip = false;
Vue.use(InertiaApp);

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