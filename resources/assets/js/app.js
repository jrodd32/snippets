
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });

document.addEventListener('DOMContentLoaded', function () {
    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any nav burgers
    if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
    }
});

// Favorite the snippet (will need to expand in future)
$('.favorite').click(function (event) {
    event.preventDefault();

    axios.post(
        '/api/snippets/' +
        event.currentTarget.dataset.snippet +
        '/favorite/' + event.currentTarget.dataset.user
    ).then(response => {
        console.log(response.data);
    }).catch(response => {});
});

$('.tabs a').click(function (event) {
    event.preventDefault();

    if (event.currentTarget.dataset.disabled === 'true') {
        return;
    }

    var target = event.currentTarget.dataset.target;

    $('li').removeClass('is-active');
    $('.tab-content').removeClass('is-active');

    $(this).parents('li').addClass('is-active');
    $('[data-name=' + target + ']').addClass('is-active');
});
