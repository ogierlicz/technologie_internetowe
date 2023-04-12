<?php
// print_r($)

foreach ($_POST as $key => $value){
    if (empty($value)){
        echo "<script>history.back();</script>";
        exit();
    }
}

require_once "./connect.php";
$sql = "INSERT INTO 'users' ('id', 'city_id', 'firstName', 'lastName', 'birthday')
VALUES (NULL, '$_POST[city_id]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]');";
$conn->query($sql);

echo $conn->affected_rows; //1-ok, 0-error