var domain = require('domain');
var serverDomain = domain.create();

serverDomain.on('error', function(err) {
    console.log("Помилка на сервері %s", err);
    process.exit(1);
});

serverDomain.run(function() {
    var express = require("express");
    var bodyParser = require("body-parser");
    var sql = require("mssql");
    var sqlcon = require("./sql_connect");

    var app = express();
    app.use(bodyParser.json());
    app.use(function (req, res, next) {
        //Enabling CORS
        res.header("Access-Control-Allow-Origin", "*");
        res.header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT,DELETE");
        res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, contentType,Content-Type, Accept, Authorization");
        next();
    });

    //Setting up server
    var server = app.listen(process.env.PORT || 3333, function () {
        var port = server.address().port;
        console.log("App now running on port", port);
    });

    app.get('/', (req, res) => {
        res.send('Welcome to my site :D');
    });

  



/*    app.get("/users", function(req , res){
        var query = "select * from Users";
        console.log("USERS");
        res.send('USERS');
        // executeQuery (res, query);
    });*/

    var womanProductsRouter = require('./routes/woman_products');
    app.use('/woman_products', womanProductsRouter);
    var manCategoriesRouter = require('./routes/man_categories');
    app.use('/man_categories', manCategoriesRouter);
    var womanCategoriesRouter = require('./routes/woman_categories');
    app.use('/woman_categories', womanCategoriesRouter);
    var manProductsRouter = require('./routes/man_products');
    app.use('/man_products', manProductsRouter);
        var productCategoriesRouter = require('./routes/product_categories');
    app.use('/product_categories', productCategoriesRouter);
    var usRouter = require('./routes/products');
    app.use('/products', usRouter);
     var orderItemRouter = require('./routes/order_items');
    app.use('/order_items', orderItemRouter);

});