/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
import $ from 'jquery';
function hello(){
        $.postJSON('http://projectpractice/Api/public/',{ login: "user1", password: "2pm" }, function(data)
        {
  var items = [];
  $.each(data, function(key, val,json){
    items.push('<li id="' + key + '">' + val.login + '  ' + val.password + '</li>');
  });
 
  $('<ul/>', {
    'class': 'my-new-list',
    html: items.join('')
  }).appendTo('body');
})
 };
console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
