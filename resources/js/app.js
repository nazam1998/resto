/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap2');
// require('jquery');
// require('jquery.easing');
// require('popper.js');
// require('bootstrap')
// require('./jquery');
// require('./modernizr');
// require('./bootstrap');
// require('./menustick');
// require('./parallax');
// require('./easing');
// require('./wow');
// require('./smoothscroll');
// require('./masonry');
// require('./imgloaded');
// require('./classie');
// require('./colorfinder');
// require('./gridscroll');
// require('./contact');
// require('./common');

// jQuery(function ($) {
//     $(document).ready(function () {
//         //enabling stickUp on the '.navbar-wrapper' class
//         $('.navbar-wrapper').stickUp({
//             parts: {
//                 0: 'banner',
//                 1: 'aboutus',
//                 2: 'specialties',
//                 3: 'feedback',
//                 4: 'contact'
//             },
//             itemClass: 'menuItem',
//             itemHover: 'active',
//             topMargin: 'auto'
//         });
//     });
// });

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.onload = function () {
const app = new Vue({
    el: '#app',
});
};
