const decreaseQuantity = document.getElementById('decrease_product');
const increaseQuantity = document.getElementById('increase_product');
var currentQuantity = document.getElementById('current_quantity');

         function arrayFromObject(obj) {
            var arr = [];
            for (var i in obj) {
                arr.push(obj[i]);
            }
            return arr;
        }

        function groupBy(list, fn) {
            var groups = {};
            for (var i = 0; i < list.length; i++) {
                var group = JSON.stringify(fn(list[i]));
                if (group in groups) {
                    groups[group].push(list[i]);
                } else {
                    groups[group] = [list[i]];
                }
            }
            return arrayFromObject(groups);
        }



