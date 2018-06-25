app.controller('loginCtrl', function ($scope, $http, loginService) {
    $scope.users_list = function () {
        $http.get('http://192.168.33.10/index.php/registered_users')
            .then(function (response) {
                $scope.users = response.data;
                var count = false;
                var user_name;
                for (let i = 0; i < $scope.users.length; i++) {
                    if ($scope.users[i].email == $scope.login_email && $scope.users[i].password == $scope.login_password) {
                        count = true;
                        user_name = $scope.users[i].name;
                    }
                }
                if (count) {
                    alert("Hello " + user_name + " !!!");
                    // loginService.login_user = user_name;
                    loginService.setName(user_name);
                    //console.log(loginService.getName());
                    window.location = "http://localhost:3000/?#!/";
                } else {
                    alert("Перевірте введені дані або зареєструйтесь!");
                }
            });
    }
})

