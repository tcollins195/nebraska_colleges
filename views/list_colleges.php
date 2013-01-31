<h2>All Colleges</h2>
<table class="table table-hover">
	<caption>...</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>City</th>
			<th>Tuition</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$lines = file('data/colleges.csv',FILE_IGNORE_NEW_LINES);
		$i = 0;
		
		foreach($lines as $line) {
			$parts = explode(',', $line);
			
			$name = $parts[0];
			$city = $parts[1];
			$tution = $parts[2];
			echo '<tr>';
				echo "<td>$name</td>";
				echo "<td>$city</td>";
				echo "<td>$tution</td>";
				echo "<td><a href=\"./?p=form_edit_band&band=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></i></a>
				<a href=\"./actions/delete_band.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></a></td>";
			echo '</tr>';

			$i++;
		}
		?>
	</tbody>
</table>
