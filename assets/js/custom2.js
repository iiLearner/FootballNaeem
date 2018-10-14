firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
  	
   window.location.href = "_football_shop-account.html#header";
  } else {
    // No user is signed in.
   window.location.href = "_football_shop-login.html#header";
  }
});



  function login(){
  	
	var userEmail = document.getElementById("login-name").value;
  var userPass = document.getElementById("login-password").value;


  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
  window.alert("Error: " + errorMessage);

});
}

function logout(){
  firebase.auth().signOut();
};
