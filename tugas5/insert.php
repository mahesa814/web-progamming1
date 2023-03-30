<?php
require 'function.php';
$name = $_POST['name'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$insert_komentar = "INSERT INTO komentar (name, email,komentar)  VALUES ('$name','$email', '$komentar')";
if (mysqli_query(connect(), $insert_komentar)) {
    echo '<script language="javascript">';
    echo 'alert("Successfully added komentar"); location.href="list_komentar.php"';
    echo '</script>';
    exit();
} else {
    echo "Error: " . $insert_komentar . "<br>" . mysqli_error(connect());
}
mysqli_close(connect());
?>