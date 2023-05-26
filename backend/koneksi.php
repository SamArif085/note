<?php

$connection = new mysqli("localhost", "root", "", "note");
$data       = mysqli_query($connection, "select * from notes");
$data       = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($data);
