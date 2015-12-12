<?php
    foreach ( $_POST as $key => $value ) { $$key = $value; }
    include 'ConnectDB.php';
    //echo "<!--{$user_username}---{$user_password}-->";
    session_start();
    $sql = "SELECT username, password FROM Users WHERE username = '{$user_username}';";

    if($result = $conn->query($sql)){
      if(!$result->num_rows){
        $_SESSION['error']="Username not Found";
        header("location: login.php");
      }
      else
        while($row = $result->fetch_assoc())
          {
            if("{$row['password']}"==$user_password){
              $_SESSION['username'] = $user_username;
              header("location: portal.php");
            }
            else {
              $_SESSION['error']="Wrong Password!";
              header("location: login.php");
            }
          }
    } else {
      $_SESSION['error']="Query on Database Could not be run!";
      header("location: login.php");
    }
?>
