app.controller('womanCtrl', function ($scope, $http) {
    $http.get('http://192.168.33.10/index.php/woman_products')

    .then(function(response) {
        $scope.product_woman = response.data;

        var result = groupBy($scope.product_woman, function(item) {
            return [item.id_product, item.name];
        });

        $scope.product_woman = result.map(arrayOfElements => ({
            "id_product": arrayOfElements[0].id_product,
            "name": arrayOfElements[0].name,
            "image": arrayOfElements[0].image,
            "brand": arrayOfElements[0].brand,
            "price": arrayOfElements[0].price,
            "color": arrayOfElements[0].color,
            "description": arrayOfElements[0].description,
            "id_category": arrayOfElements[0].id_category,
            "sizes": arrayOfElements.map(element => element.size)}));
        console.log($scope.product_woman);
    });

    $scope.color = function (x) {
        $scope.myColor = x;
    };
    $scope.brand = function (x) {
        $scope.myBrand = x;
    };

    $http.get('http://192.168.33.10/index.php/woman')
        .then(function(response) {
            $scope.sex_category_woman = response.data;
            // console.log($scope.sex_category_woman);
            setTimeout(function() {
                $scope.id_category = document.getElementsByClassName('id_category');
                for(let i=0; i<$scope.id_category.length; i++){
                    $scope.id_category[i].onclick = function () {
                        $scope.id_category_attr = document.getElementsByClassName('id_category')[i].getAttribute('data-id');
                        console.log($scope.id_category_attr);
                        $http.get('http://192.168.33.10/index.php/product_categories/' + $scope.id_category_attr)
                            .then(function(response) {
                                $scope.product_woman = response.data;
                                console.log($scope.product_woman);
                            });
                    }
                }
            }, 0);
        });
    $http.get('http://192.168.33.10/index.php/man')
        .then(function(response) {
            $scope.sex_category_man = response.data;
        });

    // $scope.woman_products100 = function () {
    //     $http.get('http://192.168.33.10/index.php/woman_products100')
    //         .then(function(response) {
    //             $scope.product_woman = response.data;
    //         });
    // }

    var check_color = document.getElementsByClassName("color_contaiter");
    for (let i=0; i<check_color.length; i++){
        check_color[i].onclick = function () {
            for(let j=0; j<check_color.length; j++){
                check_color[j].classList.remove('check_border');
            }
            check_color[i].classList.add('check_border');
        }
    }

    var check_size = document.getElementsByClassName("size_box");
    for (let i=0; i<check_size.length; i++){
        check_size[i].onclick = function () {
            for(let j=0; j<check_size.length; j++){
                check_size[j].classList.remove('check_border');
            }
            check_size[i].classList.add('check_border');
        }
    }
})

