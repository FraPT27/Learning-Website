<?php
session_start();
if (isset($_GET['state'])) {
    $_SESSION['chat_open'] = (int)$_GET['state'];
}
?>