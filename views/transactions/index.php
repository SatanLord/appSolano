<!--Vista Index -->
<div class="row">
	<div class="col s12 m12 l12">
<a href="<?php echo APP_URL; ?>transactions/add"><h4 align="center">Añadir</h4></a>
<?php
	function getMoney($amount){
		if ($amount<0) {
			$amount = str_replace("-", "", $amount);
			$amount = number_format($amount, 2);
			$amount = '<div style="color:red">-$'.$amount.'</div>';
		}else{
			$amount = number_format($amount, 2);
			$amount = '<div style="color:#00FF00">&nbsp;$'.$amount.'</div>';
		}
		return $amount;
	}

	function getBalance($transactions){
		$num = count($transactions);
		asort($transactions);
		$balance = array();
		for ($i=0; $i < $num ; $i++) { 
			$j = 0;
			$sum = 0;
			foreach ($transactions as $transaction) {
				if ($j < $num-$i){
					$sum += $transaction[5];
				}
				$j++;
			}
			$balance[$i] = $sum;
		}
		return $balance; 
	}
?>

<div class="row">
	<h3 align="center">Transacciones</h3>

	<div class="col-sm-1">
		<a href="<?php echo APP_URL; ?>transactions/add">
			<span class="glyphicon glyphicon-plus"></span>
		</a>
	</div>
</div>

<table class=" table-responsive " border="2" align="center">


<tr>

		<th>ID</th>

		<th>Description</th>
		<th>Date</th>
		<th>Amount</th>
		<th>Balance</th>
		<th>Category</th>
		<th>Actions</th>
	</tr>
	</thead>
	<?php
	$balance = getBalance($transactions); 
	$i=0;
	foreach ($transactions as $transaction): 
		if ($date = date_create($transaction["4"])) {
			$date = date_format($date, "d/m/Y");
		}
/*<?php echo date_format($date, "d/m/Y"); ?>*/
	?>
		<tr>
			<td><?php echo $transaction["0"]; ?> </td>
			<td><?php echo $transaction["3"]; ?> </td>
			<td><?php echo $date; ?> </td>
			<td><?php echo getMoney($transaction["5"]); ?> </td>
			<td><?php echo getMoney($balance[$i]); ?> </td>
			<td><?php echo $transaction["7"]; ?> </td>
			<td>  <a href="<?php echo APP_URL; ?>transactions/edit/<?php echo $transaction["0"]; ?>"><i class="small material-icons">Editar</i></a>
		        <a href="<?php echo APP_URL; ?>transactions/delete/?id=<?php echo $transaction["0"]; ?>"><i class="small material-icons">Eliminar</i></a>

		        
  </td>
		</tr>
	<?php 
	$i++;
	endforeach ?>
</table>

</div>
</div>
