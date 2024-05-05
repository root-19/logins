<?php
function ValidateLogin($username, $password, ){
     
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
    $sql = "SELECT * FROM users  WHERE username = '$username' && password = '$password'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}
