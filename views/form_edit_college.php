<?php 
	// Read all lines of the CSV file into an array
	$lines = file('data/colleges.csv',FILE_IGNORE_NEW_LINES);
	
	// Get the line associated with the 'band' paramter in the Query String
	$college = explode(',', $lines[$_GET['college']]);
?>

<h2>Edit Band</h2>
<form class="form-horizontal" action="actions/edit_college.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['college'] ?>" />
	<div class="control-group">
		<label class="control-label" for="college_name">University</label>
		<div class="controls">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-home"></i> </span>
				<?php echo input('college_name', 'required', $college[0]) ?>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="college_city">City</label>
		<div class="controls">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-map-marker"></i> </span>
				<?php echo input('college_city', 'required',$college[1]) ?>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="college_tuition">Tuition</label>
		<div class="controls">		
			<div class="input-prepend input-append">
				<span class="add-on">$</span>
				<?php echo input('college_tuition', 'required',$college[2]) ?>
				<span class="add-on">.00</span>
			</div>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-warning"><i class="icon-edit icon-white"></i> Edit College</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>