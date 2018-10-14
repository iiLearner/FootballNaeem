 var config = {
    apiKey: "AIzaSyAv3riUaJ0hCWC8LbA0xx6gFgXm7ZHYzNs",
    authDomain: "cuscamerino-cb24b.firebaseapp.com",
    databaseURL: "https://cuscamerino-cb24b.firebaseio.com",
    projectId: "cuscamerino-cb24b",
    storageBucket: "cuscamerino-cb24b.appspot.com",
    messagingSenderId: "179857087588"
  };
  firebase.initializeApp(config);
//referenxe message collection
var messagesRef = firebase.database().ref('messages');

// custom contact form
document.getElementById("contact-form_id").addEventListener('submit', submitForm);

function submitForm(e) {
	// body...
	e.preventDefault();

	var name= getInputVal('contact-form-name');
	var email= getInputVal('contactEmail');
	var subject= getInputVal('contactSubject');
	var message= getInputVal('contactMessage');

	saveMessage(name, email, subject, message);

	//show alert
	document.querySelector('.alert').style.display = 'block';

	//hide alert after 3 seconds
	setTimeout(function(){
		document.querySelector('.alert').style.display = 'none';
	},5000);

	//Clear form
	document.getElementById('contact-form_id').reset();

}

//function to get form values
function getInputVal(id){
	return document.getElementById(id).value;
}

//Save message to firebase

function saveMessage(name, email, subject, message){
	var newMessageRef = messagesRef.push();
	newMessageRef.set({
		name: name,
		email:email,
		subject:subject,
		message:message

	});
}
