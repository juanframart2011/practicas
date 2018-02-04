var socket = io.connect( "http://192.168.1.72:6677",{"forceNew":true} );

socket.on( "messages", function( data ){

	render( data );
});

function render( data ){

	var html = data.map(function( message, index ){

		return (`
			<div class="message">
				<strong>${message.nickname}</strong> dice:
				<p>${message.text}</p>
			</div>
		`);
	}).join( ' ' );

	var div = document.getElementById( "messages" );
	div.innerHTML = html;
	div.scrollTop = div.scrollHeight;
}

function addMessage( e ){

	var message = {

		text: document.getElementById( "text" ).value,
		nickname: document.getElementById( "nickname" ).value
	}

	document.getElementById( "nickname" ).style.display = "none";

	socket.emit( 'add-message', message );

	return false;
}