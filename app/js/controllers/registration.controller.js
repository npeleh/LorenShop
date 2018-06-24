app.controller('registrationCtrl', function ($scope, $http) {
    $scope.reg = function () {
    $http.get('http://192.168.33.10/index.php/registration?name='+$scope.name+'&lastname='+
        $scope.lastname+'&email='+$scope.email+'&password='+$scope.password)
        .then(function(response) {
            // $scope.registration = response.data;


        });
    }
})