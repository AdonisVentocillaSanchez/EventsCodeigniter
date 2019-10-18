<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Eventos</title>
</head>
<body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB_kGNQSeNAAzajySJE473CbIF3TzJQRNg",
    authDomain: "uaevents.firebaseapp.com",
    databaseURL: "https://uaevents.firebaseio.com",
    projectId: "uaevents",
    storageBucket: "uaevents.appspot.com",
    messagingSenderId: "607526931479",
    appId: "1:607526931479:web:9a343f78dd1a2932116052",
    measurementId: "G-Q7V5BV7YYB"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

</body>
</html>