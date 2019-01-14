require('./bootstrap');

window.Vue = require('vue');

Vue.component('comments', require('./components/Comments.vue'));


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

const app = new Vue({
    el: '#app'
});

