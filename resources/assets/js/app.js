
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import parallax from '../../../bower_components/parallax.js/parallax.js';
import Swiper from '../../../bower_components/swiper/dist/js/swiper.js';

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});





$('.parallax-banner').parallax({imageSrc: 'images/banner.jpeg'});
$('.parallax-started').parallax({imageSrc: 'images/banner.jpeg'});


let swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 30,
    loop: true
});