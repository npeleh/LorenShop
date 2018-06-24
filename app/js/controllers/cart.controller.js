app.controller('cartCtrl', function ($scope, cartService) {
    $scope.current_quantity = cartService.current_quantity;
    $scope.decreaseProduct = cartService.decreaseProduct;
    $scope.increaseProduct = cartService.increaseProduct;
})
