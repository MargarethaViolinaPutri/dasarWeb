<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
session_unset();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
$message= "Anda berhasil Log Out";
echo "<SCRIPT>
alert('$message')
window.location.replace('../index.html');
</SCRIPT>";
exit;
?>