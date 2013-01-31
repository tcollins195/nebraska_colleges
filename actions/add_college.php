<?php session_start() ?>

<?php 
if($_POST['college_name'] != '' &&
	$_POST['college_city'] != '' &&
	$_POST['college_tuition'] != '') {
	
	$f = fopen('../data/colleges.csv', 'a');
	fwrite($f, "\n{$_POST['college_name']},{$_POST['college_city']},{$_POST['college_tuition']}");
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your college has been added.',
			'type' => 'success'
	);
	
	header('Location:../?p=list_colleges');
} else {
	$_SESSION['POST'] = $_POST;
	
	$_SESSION['message'] = array(
			'text' => 'Please enter all required information.',
			'type' => 'block'
	);
	
	header('Location:../?p=form_add_college');
}
	
?>
