var socket = io.connect( "http://192.168.56.1:6677",{"forceNew":true} );

socket.on( "messages", function( data ){

	console.log( data );
});