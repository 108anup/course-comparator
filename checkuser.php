<?php
    foreach ( $_POST as $key => $value ) { $$key = $value; }
    include 'ConnectDB.php';
    //echo "<!--{$user_username}---{$user_password}-->";
    $sql = "SELECT username, password FROM Users WHERE username = '{$user_username}';";

    if($result = $conn->query($sql)){
      if(!$result->num_rows)
        echo "Username not Found";
      else
        while($row = $result->fetch_assoc())
          {
            if("{$row['password']}"==$user_password){
              echo "fine";
            }
            else {
              echo "Wrong Password!";
            }
          }
    } else {
      echo "Could not Run Query onDatabase";
    }
?>
