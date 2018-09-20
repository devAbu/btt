<?php
//TODO: bolji redirect
session_start();
echo 'Logged out';
session_destroy();
header("location:index");
?>