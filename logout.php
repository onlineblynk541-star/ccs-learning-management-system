<?php
// Ensure NO spaces, tabs, or newlines exist before the <?php tag above!
session_start();

// Clear all session variables
$_SESSION = array();

// Kill the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect
header("Location: admin_login.php");
exit();
?>
