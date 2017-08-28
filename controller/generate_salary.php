<?php 
	include_once '../controller/excel_reader.php';
	include_once '../model/db.php';


	$file_info = pathinfo($_FILES['attendence']['name']);
	$final_file_name = date("Y_M",strtotime($_POST['month'])).".".$file_info['extension'];
	$table_name = "attendence_".date("Y_M",strtotime($_POST['month']));
	save_to_local($_FILES, $final_file_name);
	$final_staff_attendence = get_staff_attendence($final_file_name);
	if(save_into_database($table_name, $final_staff_attendence)){
		// header("Location: ../view/generate_salary.php?status=sucess");
	}else{
		header("Location: ../view/generate_salary.php?status=error");
	}

	function save_to_local($files, $file_name){
		$target_dir = "../files/";
		$target_file = $target_dir . basename($file_name);
		if (move_uploaded_file($files["attendence"]["tmp_name"], $target_file)) {
			return true;
	    } else {
	    	return false;
	    }
	}

	function get_staff_attendence($file_name){
		$file_name = '../files/'.$file_name;
		$selected_excel_data = get_excel_data($file_name);
		$i = 0;
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
			$wd_value = $llp_value = $lwp_value =0;
			if (array_key_exists("Department",$value))  
			{  
				$department = array_keys($value)[2];
			}else{
				$staff_id = $selected_excel_data[$key][2];
				$staff_name = array_keys($value)[2];
				$first_cell = array_keys($value)[0];
				$second_cell = array_keys($value)[1];
				unset($value[$staff_name]);
				unset($value[$first_cell]);
				unset($value[$second_cell]);

				$wd_key = array("P","P(OD)");
				foreach ($wd_key as $key => $value1) {
					$wd_value = $wd_value + $value[$value1];
				}

				$lwp_key = array("WOP","CCL", "CL", "NROD", "ROD", "H", "HP", "SL", "WO");
				foreach ($lwp_key as $key => $value1) {
					$lwp_value = $lwp_value + $value[$value1];
				}

				$llp_key = array("LOP", "A");
				foreach ($llp_key as $key => $value1) {
					$llp_value = $llp_value + $value[$value1];
				}
				$final_staff_attendence[$i]['staff_id'] = $staff_id;
				$final_staff_attendence[$i]['w_d'] = $wd_value;
				$final_staff_attendence[$i]['lwp'] = $lwp_value;
				$final_staff_attendence[$i]['llp'] = $llp_value;
				$i++;
			}
		}
		return $final_staff_attendence;
	}

	function create_table($table_name){
		$conn = db_connect();
		$sql = 'SELECT 1 FROM `'.$table_name.'` LIMIT 1';
		$val = mysqli_query($conn, $sql);
		if($val !== FALSE)
		{
		   $sql = "TRUNCATE TABLE `".$table_name."`";
		}
		else
		{
		   $sql = "CREATE TABLE `".$table_name."` (
					  `id` int(255) NOT NULL AUTO_INCREMENT,
					  `staff_id` int(255) DEFAULT NULL,
					  `w_d` int(255) DEFAULT NULL,
					  `lwp` int(255) DEFAULT NULL,
					  `llp` int(255) DEFAULT NULL,
					  PRIMARY KEY (`id`)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1";
		}
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function insert_into_selected_table($table_name, $staffs_data){
		$conn = db_connect();
		foreach ($staffs_data as $key => $staff_data) {
			insert($table_name, $staff_data, $conn);
		}
		return true;
	}

	function save_into_database($table_name, $staffs_attendece){
		if(create_table($table_name)){
			return insert_into_selected_table($table_name, $staffs_attendece);
		}else{
			return false;
		}
	}

	


