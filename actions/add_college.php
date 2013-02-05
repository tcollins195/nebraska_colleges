<?php session_start() ?>

<?php 
if($_POST['college_tuition'] != '') {
	$find = array(",","$");
	$formatted_tution = str_replace($find, '', $_POST['college_tuition']);	// get rid of the commas and $ signs
}

if($_POST['college_name'] != '' &&
	$_POST['college_city'] != '' &&
	is_numeric($formatted_tution)) {
	
	$f = fopen('../data/colleges.csv', 'a');	
	
//	fwrite($f, $_POST['band_name'].','.$_POST['band_genre'].','.$_POST['band_numalbums']);
	
	fwrite($f, "\n{$_POST['college_name']},{$_POST['college_city']},$formatted_tution");
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your college has been added.',
			'type' => 'success'
	);
	
	header('Location:../?p=list_colleges');
} else {
	$_SESSION['POST'] = $_POST;
	
	$_SESSION['message'] = array(
			'text' => 'Please enter all required information correctly.',
			'type' => 'block'
	);
	
	header('Location:../?p=form_add_college');
}
	
?>
