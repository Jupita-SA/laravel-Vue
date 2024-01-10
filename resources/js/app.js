// resources/js/app.js

require('./bootstrap');

window.Vue = require('vue').default;

// Import your new components
import StartRecording from './components/StartRecording.vue';


// Register the "start-recording" component
Vue.component('start-recording', StartRecording);
Vue.component('navbar', require('./components/Navbar.vue').default);


const app = new Vue({
    el: '#app',
});
