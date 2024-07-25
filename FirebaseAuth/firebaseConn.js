import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.4/firebase-app.js";
import { getAuth, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.12.4/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyD5myzDIbF2yikXCUGKf6KbveKK4HOAGE0",
    authDomain: "e-auction-auth.firebaseapp.com",
    projectId: "e-auction-auth",
    storageBucket: "e-auction-auth.appspot.com",
    messagingSenderId: "304819215778",
    appId: "1:304819215778:web:6f66b04b64cd9791ff26fb",
    measurementId: "G-9TH7DW8RQ5"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
auth.languageCode = 'en'
const provider = new GoogleAuthProvider();

const googleLogin = document.getElementById("google-login-btn");
googleLogin.addEventListener("click", function() {

    signInWithPopup(auth, provider)
        .then((result) => {
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const user = result.user;
            const displayName = user.displayName;
            const [firstName, lastName] = displayName.split(' ');
            console.log(firstName);
            console.log(lastName);

            // Create a JSON object to send to the PHP script
            const userData = {
                // uid: user.uid,
                email: user.email,
                displayName: user.displayName,
                phoneNumber: user.phoneNumber,
                FirstName: firstName,
                LastName: lastName,
                photoURL: user.photoURL
            };
            // Make an AJAX request to the PHP script
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '../../E-Auction-System/FirebaseAuth/storeUser.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify(userData));
            console.log("return firebase");
            // window.location.href = 'profile.php';
            // window.location.href = `profile.php?uid=${user.uid}`;
        }).catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;

        });

});