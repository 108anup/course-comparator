<?php include 'start.php';?>

<div class="jumbotron text-center">
  <h1><a id="heading" href="index.php">Course Comparator</a></h1><br><br>
</div>

<?php
    $sql="SELECT institute FROM Users WHERE username='{$user_username}';";
    if ($result = $conn->query($sql)){
      while($row = $result->fetch_assoc()){
            echo "<!--{$row['institute']}-->";
            $user_institute = "{$row['institute']}";
        }
    }
    $sql2="SELECT DISTINCT Course_Name,Branch,Course_Details FROM Courses WHERE institute='{$user_institute}';";

    if ($result = $conn->query($sql2)) {
      while($row = $result->fetch_assoc())
        {
            echo "{$row['Course_Name']} - {$row['Branch']}<br>{$row['Course_Details']}<br><br>";
        }
    } else {
      echo 'No Courses';
    }

?>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

<?php include 'end.php' ?>
