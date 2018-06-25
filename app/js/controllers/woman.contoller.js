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


        $scope.woman_products_no_size = function () {
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
        }


    });

    $scope.color = function (x) {
        $scope.myColor = x;
    };
    $scope.brand = function (x) {
        $scope.myBrand = x;
    };
    $scope.price = function (x, y) {
        $scope.min = x;
        $scope.max = y;
    };

    $http.get('http://192.168.33.10/index.php/woman')
        .then(function(response) {
            $scope.sex_category_woman = response.data;
            setTimeout(function() {
                $scope.id_category = document.getElementsByClassName('id_category');
                for(let i=0; i<$scope.id_category.length; i++){
                    $scope.id_category[i].onclick = function () {
                        $scope.id_category_attr = document.getElementsByClassName('id_category')[i].getAttribute('data-id');
                        $http.get('http://192.168.33.10/index.php/product_categories/' + $scope.id_category_attr)
                            .then(function(response) {
                                $scope.product_woman = response.data;
                            });
                    }
                }
            }, 0);
        });
    $http.get('http://192.168.33.10/index.php/man')
        .then(function(response) {
            $scope.sex_category_man = response.data;
        });

    $scope.woman_products_size_xs = function () {
        $http.get('http://192.168.33.10/index.php/woman_products_size_xs')
            .then(function(response) {
                $scope.product_woman = response.data;
            });
    }

    $scope.woman_products_size_s = function () {
        $http.get('http://192.168.33.10/index.php/woman_products_size_s')
            .then(function(response) {
                $scope.product_woman = response.data;
            });
    }

    $scope.woman_products_size_m = function () {
        $http.get('http://192.168.33.10/index.php/woman_products_size_m')
            .then(function(response) {
                $scope.product_woman = response.data;
            });
    }

    $scope.woman_products_size_l = function () {
        $http.get('http://192.168.33.10/index.php/woman_products_size_l')
            .then(function(response) {
                $scope.product_woman = response.data;
            });
    }

    $scope.woman_products_size_xl = function () {
        $http.get('http://192.168.33.10/index.php/woman_products_size_xl')
            .then(function(response) {
                $scope.product_woman = response.data;
            });
    }
    var color = document.getElementById("color");
    var check_color = document.getElementsByClassName("color_contaiter");
    for (let i=0; i<check_color.length; i++){
        check_color[i].onclick = function () {
            color.style.display = "inline-block";
            for(let j=0; j<check_color.length; j++){
                check_color[j].classList.remove('check_border');
            }
            check_color[i].classList.add('check_border');
        }
    }
    color.onclick = function () {
        color.style.display = "none";
        for(let j=0; j<check_color.length; j++){
            check_color[j].classList.remove('check_border');
        }
    }

    var size = document.getElementById("size");
    var check_size = document.getElementsByClassName("size_box");
    for (let i=0; i<check_size.length; i++){
        check_size[i].onclick = function () {
            size.style.display = "inline-block";
            for(let j=0; j<check_size.length; j++){
                check_size[j].classList.remove('check_border');
            }
            check_size[i].classList.add('check_border');
        }
    }
    size.onclick = function () {
        size.style.display = "none";
        for(let j=0; j<check_size.length; j++){
            check_size[j].classList.remove('check_border');
        }
    }


    var price = document.getElementById("price");
    var radio_price = document.getElementsByClassName("radio_price");
    for (let i=0; i<radio_price.length; i++){
        radio_price[i].onclick = function () {
            price.style.display = "inline-block";
            for(let j=0; j<radio_price.length; j++){
                document.getElementsByClassName('checkmark')[j].style.backgroundColor = "#fff";
            }
            document.getElementsByClassName('checkmark')[i].style.backgroundColor = "#696969";
        }
    }
    price.onclick = function () {
        price.style.display = "none";
        for(let j=0; j<radio_price.length; j++){
            document.getElementsByClassName('checkmark')[j].style.backgroundColor = "#fff";
        }
    }

    var brand = document.getElementById("brand");
    var radio_brand = document.getElementsByClassName("radio_brand");
    for (let i=0; i<radio_brand.length; i++){
        radio_brand[i].onclick = function () {
            brand.style.display = "inline-block";
            for(let j=0; j<radio_brand.length; j++){
                document.getElementsByClassName('checkmark1')[j].style.backgroundColor = "#fff";
            }
            document.getElementsByClassName('checkmark1')[i].style.backgroundColor = "#696969";
        }
    }
    brand.onclick = function () {
        brand.style.display = "none";
        for(let j=0; j<radio_brand.length; j++){
            document.getElementsByClassName('checkmark1')[j].style.backgroundColor = "#fff";
        }
    }


    var dropdown_btn = document.getElementsByClassName('dropdown-btn')[0];
    dropdown_btn.onclick = function () {
        dropdown_btn.style.listStyleType = "disc";
    }



    // setTimeout(function() {
    //     var w_category = document.getElementsByClassName('w_category');
    //     console.log(w_category.length);
    //     for (let i = 0; i < w_category.length; i++) {
    //         w_category[i].onclick = function () {
    //             for (let j = 0; j < w_category.length; j++) {
    //                 document.getElementsByClassName('w_category')[j].style.listStyleType = "circle";
    //             }
    //             document.getElementsByClassName('w_category')[i].style.listStyleType = "disc";
    //         }
    //     }
    // }, 597);

    // var m_category = document.getElementsByClassName('m_category');
    // for (let i=0; i<m_category.length; i++){
    //     m_category[i].onclick = function () {
    //         for(let j=0; j<m_category.length; j++){
    //             document.getElementsByClassName('m_category')[j].style.listStyleType = "circle";
    //         }
    //         document.getElementsByClassName('m_category')[i].style.listStyleType = "disc";
    //     }
    // }





})
app.filter("minMaxPrice", function () {
    return function (array, min, max) {
        if (!min && !max) {
            return array;
        }
        var filtered = [];
        for (var i = 0; i < array.length; i++) {
            if (test(min, max, array[i])) {
                filtered.push(array[i]);
            }
        }

        function test(min, max, testment) {
            if (min && max) {
                return testment.price >= min && testment.price <= max;
            } else if (min) {
                return testment.price >= min;
            } else if (max) {
                return testment.price <= max;
            }
        }
        return filtered;
    }
})
