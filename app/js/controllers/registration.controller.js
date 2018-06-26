app.controller('registrationCtrl', function ($scope, $http) {
    $scope.reg = function () {
    $http.get(phpVariable + 'registration?name='+$scope.name+'&lastname='+
        $scope.lastname+'&email='+$scope.email+'&password='+$scope.password)
        .then(function(response) {
            // $scope.registration = response.data;


        });
    }
})