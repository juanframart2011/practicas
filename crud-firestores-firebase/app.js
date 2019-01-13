firebase.initializeApp({
  apiKey: 'AIzaSyCmoxcPMqfeqWRqVA2GOojqcHNHswA5yUI',
  authDomain: 'fir-bootstrap-980a1.firebaseapp.com',
  projectId: 'fir-bootstrap-980a1'
});

// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();

$( "#boton" ).click( function( event ){

	event.preventDefault();

	var nombre = $( "#nombre" );
	var apellido = $( "#apellido" );
	var fecha = $( "#fecha" );

	db.collection("users").add({
	    first: nombre.val(),
	    last: apellido.val(),
	    born: fecha.val()
	})
	.then(function( docRef ){

	    console.log("Document written with ID: ", docRef.id);
	    nombre.val( '' );
	    apellido.val( '' );
	    fecha.val( '' )
	})
	.catch(function( error ){
	    console.error("Error adding document: ", error);
	});
});

db.collection("users").get().then((querySnapshot) =>{

    querySnapshot.forEach((doc) => {
        
        $( "#tabla" ).append(
        	`<tr>
                <th scope="row">${doc.id}</th>
                <td>${doc.data().first}</td>
                <td>${doc.data().last}</td>
                <td>${doc.data().born}</td>
            </tr>`
        );
    });
});