<?php include 'start.php';?>

<div class="jumbotron text-center">
  <h1><a id ="heading" href="index.php">Course Comparator</a></h1><br><br>

  <div class="row">   
		
		<div class="col-sm-2 col-sm-offset-2">
            <label class="control-label top-buffer">Select Course</label>
        </div>

	    <div class="col-sm-4">

	    	<select id="Course_Name" class="form-control" name="Course_Name">
		    	<?php 

			        $sql="SELECT DISTINCT Course_Name FROM Courses WHERE branchID='{$branchID}';";
			   
			   		if ($result = $conn->query($sql)) {
			   			while($row = $result->fetch_assoc())
				        {
				            echo "<option value={$row['Course_Name']}>{$row['Course_Name']}</option>";
				        }
			   		} else {
			   			echo '<option value="">No Courses</option>';
			   		}

		    	?>
	    	</select>

	    </div>
	    
    	<div class="col-sm-2">
    		<button class="btn btn-danger col-sm-4" id="enterbtn">Enter</button>
		</div>

	</div>

</div>

<div id="final">
	
</div>

<script type="text/javascript">
	$("#enterbtn").click(function(){

		var course = $("#Course_Name option:selected").text();

		$.post("fetchdata.php",{Course_Name : course},function(data,status){
			$("#final").html(data);
		})

	});
</script>

<?php include 'end.php';?>