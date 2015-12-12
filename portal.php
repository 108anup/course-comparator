<?php
    include 'start.php';
    session_start();
    $title="Portal - Course Comparator";

    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
        header("location: login.php?errMsg=".urlencode("Please Login to view this Page"));
    }
?>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Portal - Course Comparator</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>


<?php
    $sql="SELECT institute FROM Users WHERE username='{$_SESSION['username']}';";

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
    }
    else {
        echo 'No Courses';
    }
?>

<?php include 'end.php' ?>
