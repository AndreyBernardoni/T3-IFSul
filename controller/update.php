<?php
require_once 'Database.php';

$id = $_POST['id'];
$date = $_POST['data'];
$local = $_POST['local'];
$hour = $_POST['hora'];
$desc = $_POST['descricao'];

$db = new Database('root', '', 'agenda', 'localhost');

if ($db -> update($id, $date, $local, $hour, $desc)) {
    Header("Location: ../view/update_page.php?success=true");
} else {
    Header("Location: ../view/update_page.php?success=false");
}