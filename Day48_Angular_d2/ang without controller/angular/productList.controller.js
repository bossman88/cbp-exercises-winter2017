angular.module('myApp').controller('productList', function($scope, $http) {

    $scope.order_by = 'name';
    $scope.order_way = 'asc';
    
    $http.get('api/product-list.php').then(
        function(response) {

            $scope.products = response.data.products;
        }
    );

});
