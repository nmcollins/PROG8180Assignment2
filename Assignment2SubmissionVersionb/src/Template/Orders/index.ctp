<!-- File: src/Template/Articles/index.ctp -->

<h1>Order History</h1>

<p><?= $this->Html->link('Add Order', ['action' => 'add']) ?></p>
<table>
	<tr><td><strong>Pending Orders</strong></td></tr>
	<tr>
		<th>Number</th>
		<th>Size</th>
		<th>Crust</th>
		<th>Completed</th>
		
	</tr>
	
	<!-- Here is where we iterate through our $orders query object, printing out order info -->
	<?php $i = 0; ?>
	<?php foreach ($orders as $order): ?>	
			
		<?php if ($order->Completed  && $i == 0) {echo "<tr><td><strong>Completed Orders</strong></td></tr>"; $i++;}else {echo "<tr>";} ?>
		<td>					
			<?= $this->Html->link($order->OrderNumber, ['action' => 'summarize', $order->OrderNumber]) ?>
		</td>
		<td><?= $order->Size ?></td>
		
		<td><?= $order->Crust ?></td>		
		<td><?php if($order->Completed){echo "yes";}else{echo "no";} ?></td>		
		<td>
			<?= $this->Form->postLink(
				'Delete',
				['action' => 'delete', $order->OrderNumber],
				['confirm' => 'Are you sure?'])
			?>
			<?= $this->Html->link('Edit', ['action' => 'edit', $order->OrderNumber]) ?>
		</td>
		</tr>
	<?php endforeach; ?>
</table>