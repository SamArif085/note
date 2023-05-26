<?php
$connection = new mysqli("localhost", "root", "", "note");
$title      = $_POST['title'];
$content    = $_POST['content'];
$id         = $_POST['id'];
$result = mysqli_query($connection, "update notes set title='$title', content='$content' where id='$id'");

if ($result) {
    echo json_encode([
        'message' => 'Data edit successfully'
    ]);
} else {
    echo json_encode([
        'message' => 'Data Failed to update'
    ]);
}
