<?php
// Set a cookie named "user" with the value "John Doe" that expires in 1 day
$cookie_name = "user";
$cookie_value = "John Doe";
$expiry_time = time() + (86400 * 1); // 86400 seconds = 1 day

setcookie($cookie_name, $cookie_value, $expiry_time, "/"); 
?>
<html>
<body>
    <p>Cookie has been set successfully!</p>
</body>
</html>



<?php
if(isset($_COOKIE['user'])) {
    echo "Welcome back, " . $_COOKIE['user'] . "!";
} else {
    echo "Welcome, guest visitor!";
}
?>





<?php
// Expire the cookie immediately by setting the time to 1 hour ago
setcookie("user", "", time() - 3600, "/");
?>


