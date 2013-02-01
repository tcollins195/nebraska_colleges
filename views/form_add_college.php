<h2>Add a College</h2>
<form class="form-horizontal" action="actions/add_college.php" method="post">
	<div class="control-group">
		<label class="control-label" for="college_name">College Name</label>
		<div class="controls">
			<?php echo input('college_name', 'required')?>
			<!-- <input type="text" name="band_name" placeholder="required" /> -->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="college_city">City</label>
		<div class="controls">
			<?php echo input('college_city', 'required')?>
			<!-- <input type="text" name="band_genre" placeholder="required" /> -->
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="college_tuition">Tuition</label>
		<div class="controls">
			<?php echo input('college_tuition', 'required')?>
			<!-- <input type="text" name="band_numalbums" placeholder="required" /> -->
		</div>
	</div>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i> Add College</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>

</form>
