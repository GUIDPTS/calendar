<h2>Add Event</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?t='.$timestamp; ?>" method="post">
	<table>
		<tr>
			<td class="label">
				<label for="evt_name">Event:</label>
			</td>
			<td>
				<input type="text" name="evt_name" id="evt_name" />
			</td>
			<td class="label">
				<label for="evt_hour">Time:</label>
			</td>
			<td>
				<select name="evt_hour" id="evt_hour">
					<!-- <option value="12">12</option> -->
					<?php 
						for ($i=1; $i <= 12; $i++) { 
							printf('<option value="%d">%02d</option>', $i, $i);
						}
					?>
				</select>:
				<select name="evt_min" id="evt_min">
					<?php  
						for ($i=0; $i < 59; $i+=15) { 
							printf('<option value="%d">%02d</option>', $i, $i);
						}
					?>
				</select>
				<select name="evt_pm" id="">
					<option value="no">AM</option>
					<option value="yes">PM</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" name="submitted" value="true" />
				<input type="submit" value="Add Event" />
			</td>
		</tr>
	</table>
</form>