<?php
 session_start();
 unset($_SESSION['emailaddress']);
 header('Location: /CAR/index.php');
?>