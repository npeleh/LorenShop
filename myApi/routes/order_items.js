var express = require("express");
var orderItemRouter = express.Router();
var sqlcon = require("../sql_connect");
var sql = require('mysql');
var bodyParser = require("body-parser");

// var execQuery = function (query, res) {
//     sqlcon.query(query, function (err, ress) {
//         if (err) {
//             console.log("Error while querying database :- " + err);
//             res.send(err);
//         }
//         else {
//             res.send(ress);
//         }
//     });
// }

// usersRouter.get("/", function(req , res){
//     var query = "select * from products";
//     execQuery(query, res);
//     // res.send('products');
// });



orderItemRouter.use(bodyParser.urlencoded({
    extended: true
}));

orderItemRouter.use(bodyParser.json());

orderItemRouter.post('/', function(request, response){
    var temporaryObject = request.body;
    var orderItem = {};
    var sql = `INSERT INTO orderitems ( quantity, size, id_product_details, id_order) VALUES ('${orderItem.quantity}', '${orderItem.size}', '${orderItem.id_product_details}', '${orderItem.id_order}')`;
    console.log(sql);
    sqlcon.query(sql, function (err, result) {
    if (err) throw err;
        console.log("1 record inserted");
    });
});

module.exports = orderItemRouter;



