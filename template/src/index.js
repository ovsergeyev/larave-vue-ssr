import Vue from 'vue';
import App from './app/App.vue';

let vue = new Vue({
  el: '#app',
  render: h => h(App),
});

if (typeof window === 'undefined') {
    renderVueComponentToString(vue, (err, res) => {
        print(res);
    });
}
