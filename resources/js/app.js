require('./bootstrap');

window.Vue = require('vue');

import PopularPitches from "./components/popular-pitches";
import MainFooter from "./components/main-footer";
import LatestNews from "./components/latest-news";

Vue.component('popular-pitches', PopularPitches);
Vue.component('main-footer', MainFooter);
Vue.component('latest-news', LatestNews);

Vue.filter('formatNumber', function (value) {
    const rounded =  Math.round(value * 100) / 100;
    return rounded.toString().replace('.', ',').replace(/\B(?=(\d{3})+(?!\d))/g, ".");
});

new Vue({
    el: "#app",
});