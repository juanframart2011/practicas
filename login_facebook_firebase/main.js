$( "#login-fb" ).click( function( event ){

	event.preventDefault();

	const provider = new firebase.auth.FacebookAuthProvider();

	firebase.auth().signInWithPopup( provider ).then( result =>{

		console.info( result );
	})
	.catch( error =>{
		console.error( error );
	});
})