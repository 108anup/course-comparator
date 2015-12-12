<?php include 'start.php';?>

<div class="jumbotron text-center">
  <h1><a id="heading" href="index.php">Course Comparator</a></h1><br><br>
</div>

<?php
    $sql="SELECT institute FROM Users WHERE username='{$username}';";
    if ($result = $conn->query($sql)){
      while($row = $result->fetch_assoc()){
            $user_institute = {$row['institute']};
        }
    }
    $sql="SELECT DISTINCT Course_Name FROM Courses WHERE institite='{$user_institute}';";

    if ($result = $conn->query($sql)) {
      while($row = $result->fetch_assoc())
        {
            echo "{$row['Course_Name']} - {$Branch}<br>{$row['Course_Details']}";
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
