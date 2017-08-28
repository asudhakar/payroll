<?php 
	include_once 'header.php';
?>
<div class="container">
	<?php 
		if (isset($_GET['status'])) {
			if ($_GET['status'] == "error") {
				echo '<br/><div id="status" class="alert alert-danger">
						  <strong>Sorry!</strong> Something went wrong.
						</div>';
			}else{
				echo '<br/><div id="status" class="alert alert-success">
						  <strong>Success!</strong> Added a staff.
						</div>';
			}
			echo '<script type="text/javascript">
						setTimeout(function() {
						    $("#status").fadeOut("fast");
						}, 1000);
					</script>';
		}
	?>
	<h1 class="text-center">Generate Salary</h1>
	<hr>
	<div class="jumbotron">
		<form action="../controller/generate_salary.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-3">
					<label>Choose Month</label>
					<input type="month" name="month" class="form-control" required autofocus>
				</div>
				<div class="col-sm-9">
					<label>Attendece Report</label>
					<input type="file" name="attendence" class="form-control" required>
				</div>
			</div>
			<br>
			<div class="form-group">
				<button type="submit" class="form-control btn btn-info">Save and Generate</button>
			</div>	
		</form>
	</div>
	
</div>
<?php
	include_once 'footer.php';
?>