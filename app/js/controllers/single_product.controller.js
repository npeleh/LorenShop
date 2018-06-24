app.controller('singleCtrl', function ($scope, $http, $routeParams, cartService) {
    var id = $routeParams.id;
    $scope.current_quantity = cartService.current_quantity;
    $scope.decreaseProduct = cartService.decreaseProduct;
    $scope.increaseProduct = cartService.increaseProduct;

    $http.get('http://localhost:3333/products/'+ id)
        .then(function(response) {
            $scope.single_product = response.data;
            // console.log($scope.single_product);
        });


    $scope.size =
        {
            xs: "XS",
            s: "S",
            m: "M",
            l: "L",
            xl: "XL"
        };

})
