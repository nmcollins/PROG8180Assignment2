<!-- File: src/Template/Articles/index.ctp -->

<h1>Order History</h1>
<p><?= $this->Html->link('Add Order', ['action' => 'add']) ?></p>
<table>
	<tr>
		<th>Number</th>
		<th>Size</th>
		<th>Crust</th>
		<th>Toppings</th>
		<th>Descriptions</th>
		<th>Topping Details</th>
	</tr>
	
	<!-- Here is where we iterate through our $orders query object, printing out order info -->
	
	<?php foreach ($orders as $order): ?>
	<tr>		
		<td>					
			<?= $this->Html->link($order->OrderNumber, ['action' => 'view', $order->OrderNumber]) ?>
		</td>
		<td><?= $order->Size ?></td>
		<td><?= $order->Crust ?></td>
		<td><?= $order->ToppingList ?></td>
		<td><?= $order->ToppingId ?></td>
		<td><?php
				$SingleToppings = split(",", $order->ToppingList);
				
				print_r($SingleToppings[0]);
				
			 ?>
		</td>
		<td>
			<!--<?= $order->ordertoppingsassociation   ?>-->
		</td>
		
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