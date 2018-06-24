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

module.exports = usersRouter;

