<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['loggedin'] = false;
$_SESSION['guest'] = null;
session_destroy();
header("Location: /");