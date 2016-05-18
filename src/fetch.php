<?php 
	$connect = mysqli_connect("localhost","root","","saya");
	$output = '';
	$sql = "SELECT * FROM Recipe WHERE CName LIKE '%".$_POST['search']."%'";
	$result = mysqli_query($connect,$sql);

	if(mysqli_num_rows($result) > 0){
		$output .= '<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>Cake Name:</th>
				<th>Cake Recipe:</th>
			</tr>';
		
	while ($row = mysqli_fetch_array($result)) {
		$output .= "
			<tr>
				<td>".$row['CName']."</td>
				<td>".$row['Recipe']."</td>
			</tr>";
	}
	$output .= '</table>
	</div>';

	echo "$output";
	}else{
		echo "DATA NOT FOUND";
	}
 ?>