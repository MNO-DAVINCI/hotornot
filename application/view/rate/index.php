	<div class="container">	
		<div class="picture">
			<p><strong><?php echo $picture->name; ?></strong>, <?php echo $picture->gender; ?> , <?php echo $picture->age; ?></p>
			<img src="<?php echo $picture->url; ?>" alt="<?php echo $picture->name; ?>">
		</div>

		<div class="rate">
			<form>
				<input type="hidden" name="id" value="<?php echo $picture->id; ?>">
				<select name="rating" id="rate">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</form>
		</div>
	</div>