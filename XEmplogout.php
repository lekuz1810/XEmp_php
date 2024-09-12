<?php

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page or homepage
header("Location: XEmpTeamLogin.php"); // Change "XEmplogin.php" to the appropriate login page
exit();

?>