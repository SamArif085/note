<?php

$connection = new mysqli("localhost", "root", "", "note");
$title      = $_POST['title'];
$content    = $_POST['content'];
$date       = date('Y-m-d');
$result = mysqli_query($connection, "insert into notes set title='$title', content='$content', date='$date'");

if ($result) {
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
} else {
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}
