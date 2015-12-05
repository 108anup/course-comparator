<?php include 'start.php';?>

<div class="jumbotron text-center">
  <h1><a id ="heading" href="index.php">Course Comparator</a></h1><br><br>
  <div class="row">

		<form action="compare.php" method="post">	  

			<div class="col-sm-2 col-sm-offset-2">
                <label class="control-label top-buffer" for="branch">Select Branch</label>
            </div>

			<div class="col-sm-4">
                <select id="branch" class="form-control" name="branchID">
                    
                    <?php 

                    $sql="SELECT DISTINCT branchID, Branch FROM Courses;";
               
                    if ($result = $conn->query($sql)) {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<option value={$row['branchID']}>{$row['Branch']}</option>";
                        }
                    } else {
                        echo '<option value="">No Branches</option>';
                    }

                    ?>
                    
			    </select>
            </div>

		    <div class="col-sm-3"><button type="submit" class="btn btn-danger col-sm-4">Enter</button></div>

		</form>
 	</div>
</div>

<?php include 'end.php';?>