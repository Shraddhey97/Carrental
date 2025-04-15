<!-- admin logout session -->
<?php
session_start();
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    //delete session cookie
    setcookie(session_name(), '', time() - 3600, 
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
unset($_SESSION['login']);
//destroy the current session
session_destroy();
//redirecting user to homepage page after logging out
header("location:index.php");
exit();
?>