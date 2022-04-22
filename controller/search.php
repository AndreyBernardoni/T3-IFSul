<?php
require_once 'Database.php';

$local = $_POST['local'];

$db = new Database('root', '', 'agenda', 'localhost');
?>