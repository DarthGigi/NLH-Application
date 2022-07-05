<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['loggedin'] = false;
session_destroy();
header("Location: /");
