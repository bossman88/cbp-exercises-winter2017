angular.module('myApp').filter('czCurrency', function() {

    return function(value) {

        value = value + ' Kc';

        return value; // changed probably
    }

});