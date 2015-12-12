<?php
    foreach ( $_POST as $key => $value ) { $$key = $value; }
    include 'ConnectDB.php';
    session_start();
    $_SESSION['username']=$user_username;
    unset($_SESSION['password']);
    if($user_username==""||$user_password==""){
        header("location: login.php?errMsg=".urlencode("Please Fill All the Required Fields!"));
    }
    else{
        $sql = "SELECT username, password FROM Users WHERE username = '{$user_username}';";

        if($result = $conn->query($sql)) {
            if(!$result->num_rows){
            header("location: login.php?errMsg=".urlencode("Username not Found"));
            }
            else
                while($row = $result->fetch_assoc())
                {
                    if("{$row['password']}"==$user_password){
                        $_SESSION['password'] = $user_password;
                        header("location: portal.php");
                    }
                    else {
                        header("location: login.php?errMsg=".urlencode("Wrong Password!"));
                    }
                }
        }
        else {
            header("location: login.php?errMsg=".urlencode("Query on Database Could not be run!"));
        }
    }
?>
