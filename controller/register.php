<?php
require_once 'Database.php';

$date = $_POST['date'];
$local = $_POST['local'];
$hour = $_POST['hour'];
$desc = $_POST['desc'];

$db = new Database('root', '', 'agenda', 'localhost');

if ($db -> insert($date, $local, $hour, $desc)) {
    Header("Location: ../view/register_page.php?success=true");
} else {
    Header("Location: ../view/register_page.php?success=false");
}