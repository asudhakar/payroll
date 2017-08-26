<?php 
	include_once 'header.php';
?>
<div class="container">
	<h1 class="text-center">Add Staff</h1>
	<form action="../controller/add_staff.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Code No</label>
			<input type="text" name="code_no" class="form-control" placeholder="Code no">
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Name">
		</div>
		<div class="form-group">
			<label>Designation - Department</label>
			<input type="text" name="dept-desig" class="form-control" placeholder="Designation - Department">
		</div>
		<div class="form-group">
			<label>DOJ</label>
			<input type="date" name="doj" class="form-control" placeholder="Date of joining">
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="number" name="salary" class="form-control" placeholder="Salary">
		</div>
		<div class="form-group">
			<label>Salary Basic</label>
			<input type="number" name="salary_basic" class="form-control" placeholder="Salary Basic" value="0">
		</div>
		<div class="form-group">
			<label>Salary AGP</label>
			<input type="number" name="salary_agp" class="form-control" placeholder="Salary AGP" value="0">
		</div>
		<div class="form-group">
			<label>Salary Total</label>
			<input type="number" name="salary_total" class="form-control" placeholder="Salary Total" value="0">
		</div>
		<div class="form-group">
			<label>DA</label>
			<input type="number" name="da" class="form-control" placeholder="DA" value="0">
		</div>
		<div class="form-group">
			<label>HRA</label>
			<input type="number" name="hra" class="form-control" placeholder="HRA" value="0">
		</div>
		<div class="form-group">
			<label>PF</label>
			<input type="number" name="pf" class="form-control" placeholder="PF" value="0">
		</div>
		<div class="form-group">
			<label>ESI</label>
			<input type="number" name="esi" class="form-control" placeholder="ESI" value="0">
		</div>
		<div class="form-group">
			<label>TDS</label>
			<input type="number" name="tds" class="form-control" placeholder="TDS" value="0">
		</div>
		<div class="form-group">
			<label>PTAX</label>
			<input type="number" name="ptax" class="form-control" placeholder="PTAX" value="0">
		</div>
		<div class="form-group">
			<label>Mess</label>
			<input type="number" name="mess" class="form-control" placeholder="Mess" value="0">
		</div>
		<div class="form-group">
			<label>SA</label>
			<input type="number" name="sa" class="form-control" placeholder="SA" value="0">
		</div>
		<div class="form-group">
			<label>C-Fee</label>
			<input type="number" name="cfee" class="form-control" placeholder="C-Fee" value="0">
		</div>
		<div class="form-group">
			<label>B-Fee</label>
			<input type="number" name="bfee" class="form-control" placeholder="B-Fee" value="0">
		</div>
		<div class="form-group">
			<label>Others</label>
			<input type="number" name="others" class="form-control" placeholder="others" value="0">
		</div>
		<div class="form-group">
			<button type="submit" class="form-control btn btn-info">Submit</button>
		</div>
	</form>
</div>


<?php
	include_once 'footer.php';
?>