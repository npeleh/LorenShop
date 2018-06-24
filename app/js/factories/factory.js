app.service('cartService', function () {
    this.current_quantity = 1;
    this.decreaseProduct = function () {
        if (this.current_quantity > 1) {
            this.current_quantity--;
        }
    }
    this.increaseProduct = function () {
        this.current_quantity++;
    }
});
