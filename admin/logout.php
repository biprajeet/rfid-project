<?php
error_reporting(0);
session_start();
session_unset();
session_destroy();
echo "Successfully Logged Out<br>";
echo "You will be redirected in in 1 seconds";

header("refresh:1; url=index.html");
?>