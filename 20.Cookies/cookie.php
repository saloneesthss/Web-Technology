<?php
$cookie_name="username";
$cookie_value="john_doe";
$expiry=time()+(3600*24); //1hr*24=1day
$path="/";

setcookie($cookie_name, $cookie_value, $expiry, $path);
echo "Cookie '" . $cookie_value . "' is set.<br>";

if (isset($_COOKIE[$cookie_name])) {
    echo "Value of cookie '" . $cookie_name . "' is: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie '" . $cookie_name . "' is not set.";
}
?>