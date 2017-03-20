var module = angular.module('myApp');

module.directive('greetMe', function(){ //greetMe camel case
    return{
        template : "<h1> Made by a greetMe directive!</h1>"
    }
});    