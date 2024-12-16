<?php 
session_start();
unset($_SESSION["account"]);
// 或者用 session_destroy();
header("Location: index.html"); 
exit;