<?php 
session_start();

// Read file into array
$lines = file('../data/colleges.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['college_name']},{$_POST['college_city']},{$_POST['college_tuition']}";

// Create the string to write to the file
$data_string = implode("\n", $lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/colleges.csv', 'w'); // w for
fwrite($f, $data_string);
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Your college has been edited.',
	'type' => 'info'		
); 



// Redirect to the main page
header('Location:../?p=list_colleges');
?>