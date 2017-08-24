<?php 
	
	$salary = 10000;


	include_once '../controller/excel_reader.php';
	$selected_excel_data = get_excel_data('../sample.xlsx');

	

	foreach ($selected_excel_data as $key => $attendence_details) {
		$raw_data[] = array_count_values($attendence_details);
	}
	

	foreach ($raw_data as $key => $value) {
		$count = count($value);
		if($count > 15 || $count < 3){
			unset($raw_data[$key]);
		}
	}




	foreach ($raw_data as $key => $value) {


		if (array_key_exists("Department",$value))  
		{  
			$department = array_keys($value)[2];
		}else{
			$value['staff_id'] = $selected_excel_data[$key][2];
			$staff_name = array_keys($value)[2];
			$first_cell = array_keys($value)[0];
			$second_cell = array_keys($value)[1];
			unset($value[$staff_name]);
			unset($value[$first_cell]);
			unset($value[$second_cell]);
			$final_staff_attendence[$department][$staff_name] = $value;
		}
	}


	?>
	<table border="1">
		<tr>
			<th>Staff Id</th>
			<th>Name</th>
			<th>Department</th>
			<th>Salary</th>
			<th>W/D</th>
			<th>LWP</th>
			<th>LLP</th>
			<th>Gross Total</th>
		</tr>
		
			<?php 
				$wd_value = $lwp_value = $llp_value = 0;
				foreach ($final_staff_attendence as $department => $staffs) {
					foreach ($staffs as $staff_name => $staff_attendence) {
						$wd_key = array("P","P(OD)");
						foreach ($wd_key as $key => $value) {
							$wd_value = $wd_value + $staff_attendence[$value];
						}

						$lwp_key = array("WOP","CCL", "CL", "NROD", "ROD", "H", "HP", "SL", "WO");
						foreach ($lwp_key as $key => $value) {
							$lwp_value = $lwp_value + $staff_attendence[$value];
						}

						$llp_key = array("LOP", "A");
						foreach ($llp_key as $key => $value) {
							$llp_value = $llp_value + $staff_attendence[$value];
						}
						$total_days = $wd_value + $lwp_value + $llp_value;
						$per_day_sal = $salary/$total_days;
						$gross_total = round(($wd_value+$lwp_value)*$per_day_sal);

						echo "<tr><td>".$staff_attendence['staff_id']."</td><td>".$staff_name."</td><td>".$department."</td><td>".$salary."</td>
			<td>".$wd_value."</td>
			<td>".$lwp_value."</td>
			<td>".$llp_value."</td><td>".$gross_total."</td></tr>";
					$wd_value = $llp_value = $lwp_value =0;
					}
				}


			 ?>

		
	</table>

