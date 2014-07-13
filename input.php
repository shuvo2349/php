<!DOCTYPE html>
<html>
	<form action="input.php" method="POST">
		<fieldset>
			<label>
				<span>ID:</span>
				<input type="text" name="idText">
			</label>
			<br/>
			<label>
				<span>NAME:</span>
				<input type="text" name="nameText">
			</label>
			<br/>
			<label>
				<span>Salary:</span>
				<input type="text" name="salaryText">
			</label>
			<br/>
			<label>
				<input type="submit" name = "submitButton" value="Show below">
			</label>	
		</fieldset>
	</form>
	<?php
	require 'classcreate.php';
	if (isset($_POST['submitButton']))
	{
		$an_employee = new Employee();
		$an_employee->id = $_POST['idText'];
		$an_employee->name = $_POST['nameText'];
		$an_employee->salary  = $_POST['salaryText'];
	}

	echo $an_employee->id.''. $an_employee->name. ''. $an_employee->salary;
	?>
	
</html>