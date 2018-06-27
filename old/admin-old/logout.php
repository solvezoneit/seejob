<?php
session_start();
unset($_SESSION["admin_reg_name"]);
unset($_SESSION["admin_reg_email"]);
session_destroy();
header("Location:login.php");
exit;
?>