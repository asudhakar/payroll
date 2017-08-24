<?php 
	include_once 'header.php';
?>
<div class="container">
	<h3>Upload Student Details</h3>
	<form action="#" method="post" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td>
					<input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
				</td>
				<td>
					<button type="submit" class="btn btn-success" style="width: 208px;">Upload</button>
				</td>
			</tr>
		</table>
	</form>
</div>


<?php
	include_once 'footer.php';
?>