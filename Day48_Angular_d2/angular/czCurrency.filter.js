angular.module('myApp').filter('czCurrency', function(){

    return function(value){

        value = value + 'Kc';

        return value; //changed probably 
        //returned value will be used instead of original one
    }
});