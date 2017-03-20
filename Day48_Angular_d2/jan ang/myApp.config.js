//this is where our module configuration will go
angular.module('myApp').config(['$locationProvider' ,'$routeProvider',
    function config($locationProvider, $routeProvider) { // dependancy injection

      $locationProvider.hashPrefix('!');  //optional set has prefix on url address

      $routeProvider. // all routes are added on the $routeProvider object

        when('/', {   //if route begins with a slash
          template: '<h1>The homepage</h1>',
        }).

        when('/contact', {
          template: '<h1>The Contact Page </h1>'
        }).

         when('/product-list', {
          template: '<product-list></product-list>'
        }).

        when('/error404', {
            template: 'Error 404: page not found'
        }).



        otherwise('/error404'); // use this route when no others are a match
    }
  ]);