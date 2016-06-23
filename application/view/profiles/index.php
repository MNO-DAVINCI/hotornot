<div class="container">
	<div class="box">
	 	<h3>Add a song</h3>
        <form action="<?php echo URL; ?>profiles/addProfile" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="" required />
            <label>Age</label>
            <input type="text" name="age" value="" required />
            <label>Gender</label>
            <select name="gender">
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            </select>
            <label>Picture</label>
            <input type="text" name="picture" value="" />
            <input type="submit" name="submit_add_profile" value="Submit" />
        </form>	
	</div>

	<div class="box">
		<h3>List of profiles</h3>
	    <table>
	        <thead style="background-color: #ddd; font-weight: bold;">
	        <tr>
	            <td>Id</td>
	            <td>Name</td>
	            <td>Age</td>
	            <td>Gender</td>
	        </tr>
	        </thead>
	        <tbody>
	        <?php foreach ($profiles as $profile) { ?>
	            <tr>
	                <td><?php if (isset($profile->id)) echo htmlspecialchars($profile->id, ENT_QUOTES, 'UTF-8'); ?></td>
	                <td><?php if (isset($profile->name)) echo htmlspecialchars($profile->name, ENT_QUOTES, 'UTF-8'); ?></td>
	                <td><?php if (isset($profile->age)) echo htmlspecialchars($profile->age, ENT_QUOTES, 'UTF-8'); ?></td>
	         		<td><?php if (isset($profile->gender)) echo htmlspecialchars($profile->gender, ENT_QUOTES, 'UTF-8'); ?></td>
	            </tr>
	        <?php } ?>
	        </tbody>
	    </table>
    </div>
</div>
