var express = require( 'express' );
var app = express();
var server = require( "http" ).Server( app );
var io = require( "socket.io" )( server );
var path = require( "path" );
var tpl = __dirname + "/view";

//app.use( express.static( "view" ) )
app.use( express.static( "client" ) )

app.get( "/", function( req, res ){

	res.sendFile( '/index.html' );
});

var messages = [{
	id: 1,
	text: "Welcome to México",
	nickname: "test1"
}]

io.on( "connection", function( socket ){

	socket.emit( 'messages', messages );

	socket.on( "add-message", function( data ){

		messages.push( data );

		io.sockets.emit( 'messages', messages );
	});
});
 
server.listen( 6677, function(){

	console.log( "el servido NodeJS localhost:6677" );
});