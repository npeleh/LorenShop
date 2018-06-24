var express = require("express");
var usersRouter = express.Router();
var sqlcon = require("../sql_connect");
var sql = require('mysql');

var execQuery = function (query, res) {
    sqlcon.query(query, function (err, ress) {
        if (err) {
            console.log("Error while querying database :- " + err);
            res.send(err);
        }
        else {
            res.send(ress);
        }
    });
}


usersRouter.get("/woman", function(req , res){
    var query = "SELECT * FROM Categories WHERE id_sex_category=1";
    execQuery(query, res);
    // res.send('products');
});

usersRouter.get("/", function(req , res){
    var query = "SELECT * FROM Categories WHERE id_sex_category=2";

// usersRouter.get("/", function(req , res){
//     var query = "select * from products";
//     execQuery(query, res);
//     // res.send('products');
// });

usersRouter.get("/:id", function(req , res){

    var query = 'SELECT * FROM  products WHERE id_category=' + req.params.id;

    execQuery(query, res);
    // res.send('products');
});
// usersRouter.get("/", function(req , res){
//     var query = "SELECT Products.id_product, Products.name, Products.image, Products.brand, Products.price, Products.color, Products.description, Products.id_category, ProductDetails.size, Categories.id_sex_category FROM Products INNER JOIN Categories ON Categories.id_category = Products.id_category INNER JOIN ProductDetails ON Products.id_product=ProductDetails.id_product WHERE Categories.id_sex_category=1";
//     execQuery(query, res);
//     // res.send('products');
// });


module.exports = usersRouter;

