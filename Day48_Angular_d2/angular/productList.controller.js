angular.module('myApp').controller('productList', function($scope, $http){
    $scope.order_by = 'name';
    $scope.order_by = 'asc';

    $http:get(
        'api/product-list.php',
        function(response) {
            $scope.products = response.data.products;
        }
    )
});