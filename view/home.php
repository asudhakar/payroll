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
	<h1 class="text-center">Add Staff</h1>
	<form action="../controller/add_staff.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Staff ID</label>
			<input type="number" name="staff_id" class="form-control" placeholder="Staff ID" required>
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Name" required >
		</div>
		<div class="form-group">
			<label>Department</label>
			<select class="form-control" name="department">
				<option value="admin">
					Administration
				</option>
				<option value="agri">
					Agri
				</option>
				<option value="cse">
					CSE
				</option>
				<option value="civil">
					Civil
				</option>
				<option value="ece">
					ECE
				</option>
				<option value="mech">
					Mech
				</option>
				<option value="s_h_english">
					S&H - English
				</option>
				<option value="s_h_che">
					S&H - Chemistry
				</option>
				<option value="s_h_maths">
					S&H - Maths
				</option>
				<option value="s_h_phy">
					S&H - Physics
				</option>
			</select>
		</div>
		<div class="form-group">
			<label>Designation</label>
			<input type="text" name="designation" class="form-control" placeholder="Designation" required>
		</div>
		
		<div class="form-group">
			<label>DOJ</label>
			<input type="date" name="doj" class="form-control" placeholder="Date of joining" required>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						<label>Basic</label>
						<input type="number" name="basic" id="basic" class="form-control" placeholder="Basic" value="0">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>AGP</label>
						<input type="number" name="agp" id="agp" class="form-control" placeholder="AGP" value="0">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" id="total" class="form-control" placeholder="Total" value="0" disabled>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>DA</label>
						<input type="number" name="da" id="da" class="form-control" placeholder="DA" value="0">
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>HRA</label>
						<input type="number" name="hra" id="hra" class="form-control" placeholder="HRA" value="0">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Gross Total</label>
				<input type="number" name="gross_total" id="gross_total" class="form-control" placeholder="Salary Total" value="0" disabled>
			</div>
		</div>
		<div class="form-group">
			<label>PTAX</label>
			<input type="number" name="ptax" class="form-control" placeholder="PTAX" value="0" required>
		</div>
		<!-- <div class="jumbotron">
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						<label>PF</label>
						<input type="number" name="pf" id="pf" class="form-control" placeholder="PF" value="0" required>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>ESI</label>
						<input type="number" name="esi" id="esi" class="form-control" placeholder="ESI" value="0" required>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>TDS</label>
						<input type="number" name="tds" id="tds" class="form-control" placeholder="TDS" value="0" required>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label>PTAX</label>
						<input type="number" name="ptax" id="ptax" class="form-control" placeholder="PTAX" value="0" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-2">
					<div class="form-group">
						<label>Mess</label>
						<input type="number" name="mess" id="mess" class="form-control" placeholder="Mess" value="0" required>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>SA</label>
						<input type="number" name="sa" id="sa" class="form-control" placeholder="SA" value="0" required>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>C-Fee</label>
						<input type="number" name="cfee" id="cfee" class="form-control" placeholder="C-Fee" value="0" required>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>B-Fee</label>
						<input type="number" name="bfee" id="bfee" class="form-control" placeholder="B-Fee" value="0" required>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-group">
						<label>Others</label>
						<input type="number" name="others" id="others" class="form-control" placeholder="others" value="0" required>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Gross Total Deductions</label>
				<input type="number" name="gross_total_deductions" id="gross_total_deductions" class="form-control" placeholder="Deductions Total" value="0" required disabled>
			</div>
		</div> -->
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-6">
					<label>Account Number</label>
					<input type="number" name="bank_account_number" class="form-control" placeholder="Account Number" required>
				</div>
				<div class="col-sm-6">
					<label>IFSC Code</label>
					<input type="text" name="bank_ifsc_code" class="form-control" placeholder="IFSC Code" required>
				</div>
				
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="form-control btn btn-info">Submit</button>
		</div>
	</form>
</div>
<?php
	include_once 'footer.php';
?>
<script type="text/javascript">
	$("#basic,#agp,#da,#hra").keyup(function () {
		basic_value = parseInt($("#basic").val());
		agp_value = parseInt($("#agp").val());
		total_value = basic_value + agp_value;
		$("#total").val(total_value);
		da_value = parseInt($("#da").val());
		hra_value = parseInt($("#hra").val());
		gross_total = basic_value + agp_value + da_value + hra_value;
		$("#gross_total").val(gross_total);
		pf_val = Math.round(gross_total*(12/100));
		$("#pf").val(pf_val);
		esi_val = Math.round(gross_total*(1.75/100));
		$("#esi").val(esi_val);
	});
</script>