 (function(){

   var config = {
    apiKey: "AIzaSyAv3riUaJ0hCWC8LbA0xx6gFgXm7ZHYzNs",
    authDomain: "cuscamerino-cb24b.firebaseapp.com",
    databaseURL: "https://cuscamerino-cb24b.firebaseio.com",
    projectId: "cuscamerino-cb24b",
    storageBucket: "cuscamerino-cb24b.appspot.com",
    messagingSenderId: "179857087588"
  };
  firebase.initializeApp(config);

  const registerEmail= document.getElementById('registerEmail');
  const registerPassword= document.getElementById('registerPassword');
  const signupButton = document.getElementById('signupButton');

 /* //Add login event
  loginButton.addEventListener('click', e =>{
  //Get email and pass
  const email = registerEmail.value;
  const pass = registerPassword.value;
  const auth = firebase.auth();
  //Sign In
  const promise = auth.signInWithEmailAndPassword(email,pass)
  promise.catch(e => console.log(e.message));
  });*/

  //Add Signup Event
  signupButton.addEventListener('click', e =>{
    //Get email and pass
  const email = registerEmail.value;
  const pass = registerPassword.value;
  const auth = firebase.auth();
  //Sign In
  const promise = auth.createUserWithE mailAndPassword(email,pass)
  promise.catch(e => console.log(e.message));
  });


  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
     
     window.location.href = "_football_shop-account.php";
    } else {
      // No user is signed in.
     window.location.href = "_football_shop-registra.php";
    }
  });
 }());
