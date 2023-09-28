<?php 
$sqlQuery =  mysqli_query($sqlConnect, "SELECT *  FROM `payment`");
while($row = mysqli_fetch_assoc($sqlQuery)){
	$payment[$row['id']] = $row;
}
?>

<div id="payment" class="block">
	<table cellspacing="1" border="1" cellpadding="4" width="600">
		<tr>
			<td colspan="7">
				<a href="/create">Создать запись</a>
			</td>
		</tr>
		<tr>
			<th>Месяц</th>
			<th>Год</th>
			<th>Свет</th>
			<th>Газ</th>
			<th>Вода</th>
			<th>Инет</th>
			<th>Итого</th>
		</tr>

		<?php foreach ($payment as $pay): ?>
		<tr>
			<td><?=$pay['month']?></td>
			<td><?=$pay['year']?></td>
			<td><?=$pay['svet']?></td>
			<td><?=$pay['gaz']?></td>
			<td><?=$pay['water']?></td>
			<td><?=$pay['inet']?></td>
			<td><?=$pay['svet']+$pay['gaz']+$pay['water']+$pay['inet']?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>