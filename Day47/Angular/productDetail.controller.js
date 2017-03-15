
//retrieve the module
var module = angular.module('myApp');

module.controller('productDetail', function($scope, $http) {


//retrieve some data from the server
    $http.get('data.php').then(function(response){

       console.log(response.data);
//put the data from the response into the view ('views variable scope)
       $scope.product_name = response.data.product_name;
       $scope.description = response.data.description;


       
    });
});