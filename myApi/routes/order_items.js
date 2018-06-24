var express = require("express");
var orderItemRouter = express.Router();
var sqlcon = require("../sql_connect");
var sql = require('mysql');
var bodyParser = require("body-parser");

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

orderItemRouter.get("/:id", function(req , res){

    var query = 'SELECT * FROM  products WHERE id_category=' + req.params.id;
    execQuery(query, res);
    // res.send('products');
});

app.use(bodyParser.urlencoded({
    extended: true
}));

app.use(bodyParser.json());

app.post('/', function(request, response){
    console.log(request.body.name);
    console.log(request.body.quantity);
});

module.exports = orderItemRouter;



