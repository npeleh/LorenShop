app.controller('mainCtrl', function ($scope, $http, loginService) {


    $scope.login_user = loginService.getName();
    console.log($scope.login_user);


    $scope.showSearchLine = false;
    $scope.startSearch = function () {
        $scope.showSearchLine = !$scope.showSearchLine;
    }

     $http.get('http://192.168.33.10/index.php/woman')
        .then(function(response) {
            $scope.sex_category_woman = response.data;
            // console.log($scope.sex_category_woman);
            setTimeout(function() {
                $scope.header_id_category = document.getElementsByClassName('header_id_category');
                for(let i=0; i<$scope.header_id_category.length; i++){
                    $scope.header_id_category[i].onclick = function () {
                        $scope.header_id_category_attr = document.getElementsByClassName('header_id_category')[i].getAttribute('data-id');
                        //console.log($scope.header_id_category_attr);
                        $http.get('http://192.168.33.10/index.php/product_categories/' + $scope.header_id_category_attr)
                            .then(function(response) {
                                $scope.product_woman = response.data;
                                //console.log($scope.product_woman);
                            });
                    }
                }
            }, 0);
        });

  
        $http.get('http://192.168.33.10/index.php/man')
        .then(function(response) {
            $scope.sex_category_man = response.data;
            setTimeout(function() {
                $scope.header_id_category = document.getElementsByClassName('header_id_category');
                for(let i=0; i<$scope.header_id_category.length; i++){
                    $scope.header_id_category[i].onclick = function () {
                        $scope.header_id_category_attr = document.getElementsByClassName('header_id_category')[i].getAttribute('data-id');
                        console.log($scope.header_id_category_attr);
                        $http.get('http://192.168.33.10/index.php/product_categories/' + $scope.header_id_category_attr)
                            .then(function(response) {
                                $scope.product_man = response.data;
                                console.log($scope.product_man);
                            });
                    }
                }
            }, 0);
        });

});
