<?php
    foreach ( $_POST as $key => $value ) { $$key = $value; }
    include 'ConnectDB.php';
    $sql = "SELECT username, password FROM Users WHERE username = '{$username}';";

    if($result = $conn->query($sql)){
      while($row = $result->fetch_assoc())
        {
            if("{$row['password']}"==$password){
              echo "fine";
            }
            else {
              echo "Wrong Password!";
            }
        }
    } else {
      echo "Username no Found!";
    }
?>
