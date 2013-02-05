<h2>Add a College</h2>
<form class="form-horizontal" action="actions/add_college.php"
	method="post">

	<div class="control-group">
		<label class="control-label" for="college_name">University</label>
		<div class="controls">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-home"></i> </span>
				<?php echo input('college_name', 'required')?>
			</div>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="college_city">City</label>
		<div class="controls">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-map-marker"></i> </span>
				<?php echo input('college_city', 'required')?>
			</div>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="college_tuition">Tuition</label>
		<div class="controls">		
			<div class="input-prepend input-append">
				<span class="add-on">$</span>
				<?php echo input('college_tuition', 'required')?>
				<span class="add-on">.00</span>
			</div>
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">
			<i class="icon-plus-sign icon-white"></i> Add College
		</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>

</form>
