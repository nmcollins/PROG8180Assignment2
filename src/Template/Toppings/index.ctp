<!-- File: src/Template/Articles/index.ctp -->

<h1>Toppings</h1>
<p><?= $this->Html->link('New', ['action' => 'add']) ?></p>
<table>
	<tr>
		<th>id</th>
		<th>Description</th>		
	</tr>
	
	<!-- Here is where we iterate through our $orders query object, printing out order info -->
	
	<?php foreach ($toppings as $topping): ?>
	<tr>		
		<td>					
			<?= $this->Html->link($topping->ToppingId, ['action' => 'view', $topping->ToppingId]) ?>
		</td>
		<td><?= $topping->Description ?></td>

		
		<td>
			<?= $this->Form->postLink(
				'Delete',
				['action' => 'delete', $topping->ToppingId],
				['confirm' => 'Are you sure?'])
			?>
			<?= $this->Html->link('Edit', ['action' => 'edit', $topping->ToppingId]) ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>