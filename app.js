(function(){
	 const config = {
    apiKey: "AIzaSyAN7TfTutVEDmbFShpPRsEOMY4GTFDlcDM",
    authDomain: "bitcamp-web-quickstart.firebaseapp.com",
    databaseURL: "https://bitcamp-web-quickstart.firebaseio.com",
    projectId: "bitcamp-web-quickstart",
    storageBucket: "",
    messagingSenderId: "516184091349"
  };
  firebase.initializeApp(config);
  

  const email1 = document.getElementById('email1');
  const password1 = document.getElementById('password1');
  const btnLogin = document.getElementById('btnLogin');
  const btnSignup = document.getElementById('btnSignup');
  const btnLogOut = document.getElementById('btnLogOut');

  btnLogin.addEventListener('click', e=> {
  	const email=email1.value;
  	const pass = password1.value;
  	const auth = firebase.auth();

	const promise = firebase.auth().signInWithEmailAndPassword(email,pass);
	promise.catch(e => console.log(e.message)); 
  });

  btnSignup.addEventListener('click', e => {
	const email=email1.value;
  	const pass = password1.value;
  	const auth = firebase.auth();

	const promise = auth.createUserWithEmailAndPassword(email,pass);
	promise.catch(e => console.log(e.message)); 

  });

  btnLogOut.addEventListener('click',e => {
  	firebase.auth().signOut();
  });

  firebase.auth().onAuthStateChanged(firebaseUser => {
  	if (firebaseUser) {
  		console.log(firebaseUser);
  		btnLogOut.classList.remove('hide');
  	}else{
  		console.log('not logged In');
  		btnLogOut.classList.add('hide');
  	}
  });

}());