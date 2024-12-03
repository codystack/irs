<?php
//Connect database
include "./config/db.php";

// Retrieve PDF file from the database
$id = $_GET['id'];
$query = "SELECT * FROM documents WHERE document_id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Output PDF file as a blob
header("Content-Type: application/octet-stream");
header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename='".basename($document)."'");
header("Content-Length: " . filesize($document));
echo $row['document'];

mysqli_close($conn);