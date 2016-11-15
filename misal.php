<?php	
	$txt_file = file_get_contents('aw.txt');
			$rows = explode("\n", $txt_file);
			array_shift($rows);
			
			foreach($rows as $row => $data){
			$row_data = explode('|', $data);
			
			$info[$row]['nama'] = $row_data[0];
			$info[$row]['chat'] = $row_data[1];
			
			//echo $info[$row]['nama'];
			echo $info[$row]['chat'];
			echo '<br>';
			}
?>