<?php
require 'function.php';
$name = $_POST['name'];
$address = $_POST['address'];
$date_of_birth = $_POST['date_of_birth'];
$place_of_birth = $_POST['place_of_birth'];
$type_gender = $_POST['type_gender'];
$education = $_POST['education'];

// var_dump($name,$address,$date_of_birth,$place_of_birth,$type_gender,$education);

$insert_komentar = "INSERT INTO biodata (name, address,date_of_birth,place_of_birth,type_gender,education)  
                        VALUES (
                            '$name',
                            '$address',
                            '$date_of_birth',
                            '$place_of_birth',
                            '$type_gender',
                            '$education')";
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