<?php
require_once('session.php');

if($hierarquia != 'admin') {
    header('location:../pages/userpage.php');
}
?>