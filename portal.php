<?php
    $title="Portal - Course Comparator";
    include 'start.php';
    session_start();

    if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
        header("location: login.php?errMsg=".urlencode("Please Login to view this Page"));
    }
?>

<style>
    #mynav{
        padding: 10px;
    }
    .nav{
        padding-right: 20px;
    }
</style>

<nav class = "row navbar-default navigation" id = "mynav">
    <div class="navbar-header">
        <a class = "navbar-brand" href="#">Portal - Coures Comparator</a>
    </div>
    <div>
        <ul class="nav navbar-nav pull-right">
            <li><a href="logout.php">LOGOUT</a></li>
        </ul>
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
