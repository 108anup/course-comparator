<?php
include 'ConnectDB.php';
foreach ( $_POST as $key => $value ) { $$key = $value; } ?>

<?php

  $sql="SELECT * FROM Courses WHERE Course_Name='{$Course_Name}';";

  if ($result = $conn->query($sql)) {
    while($row = $result->fetch_assoc())
      {
          echo "{$row['Institute']}<br>{$row['Course_Details']}";
      }
  } else {
    echo '<p>No Institute</p>';
  }
