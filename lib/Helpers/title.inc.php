<?php

if (!session_id()) session_start();

$title = ucfirst(basename($_SERVER['SCRIPT_NAME'], '.php'));
$title = str_replace(["_", "-"], " ", $title);
if (strtolower($title) == 'index') {
    $title = 'Home';
}
$title = ucwords($title);
?>

<?php
/*error_reporting(E_COMPILE_ERROR);
include_once __DIR__ . '../../../lib/Config/connect.php';
$slug = $_GET['slug'];
$query = "SELECT title FROM production WHERE slug = '" . $slug . "'";
$result = mysqli_query($conn, $query);
$query2 = "SELECT title FROM post WHERE slug = '" . $slug . "'";

$result2 = mysqli_query($conn, $query2);
while ($row = mysqli_fetch_assoc($result) && $row2 = mysqli_fetch_assoc($result2)) {

    $title = ucfirst(basename($_SERVER['SCRIPT_NAME'], '.php'));
    $title = str_replace(["_,-"], " ", $title);
    if (strtolower($title) == 'prod') {
        $title = $row['title'];
        //var_dump($title); die();
    } elseif (strtolower($title) == 'story') {
        $title = $row2['title'];
    } else $title = ucwords($title);
}

*/?>