<?php
if (!empty($_POST)) {
	$error = '';
	// Обработка входных данных

	$data['month'] = (int)$_POST['month'];

	$data['year'] = (int)$_POST['year'];

	$data['svet'] = (int)$_POST['svet'];

	$data['gaz'] = (int)$_POST['gaz'];

	$data['water'] = (int)$_POST['water'];

	$data['inet'] = (int)$_POST['inet'];

	// Внесение в БД
	if (empty($error)) {
		$sqlQuery = mysqli_query($sqlConnect, "INSERT INTO `payment` VALUES(
			0, 
			'".$data['month']."',
			'".$data['year']."',
			'".$data['svet']."', 
			'".$data['gaz']."', 
			'".$data['water']."', 
			'".$data['inet']."', 
			NOW()
		)");
		header('Location: /');
	} 
	else {
		echo $error;
	}
}
?>

<form action="" method="post">
	<select name="month" id="month" required>
		<option value="1">январь</option>
		<option value="2">февраль</option>
		<option value="3">март</option>
		<option value="4">апрель</option>
		<option value="5">май</option>
		<option value="6">июнь</option>
		<option value="7">июль</option>
		<option value="8">август</option>
		<option value="9">сентябрь</option>
		<option value="10">октябрь</option>
		<option value="11">ноябрь</option>
		<option value="12">декабрь</option>
	</select>
	<input name="year" type="text" placeholder="год" value="<?=date('Y')?>" required>
	<input name="svet" type="text" placeholder="свет" required>
	<input name="gaz" type="text" placeholder="газ" required>
	<input name="water" type="text" placeholder="вода" required>
	<input name="inet" type="number" placeholder="инет" required>
	<input type="submit" value="внести платеж">
</form>
