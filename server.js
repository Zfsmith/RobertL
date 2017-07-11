var express = require("express");
var path = require("path");

var app = express();
var PORT = process.env.PORT || 3000;

app.use(express.static(process.cwd() + "/public"));

app.get("/",function(req, res){
	res.sendFile(path.join(__dirname, "public/home.html"))
});

app.get("/about", function(req, res){
	res.sendFile(path.join(__dirname, "public/about.html"))
});

app.get("/contact", function(req, res){
	res.sendFile(path.join(__dirname, "public/contact.html"))
});

app.listen(PORT, function() {
  console.log("App listening on PORT " + PORT);
});
