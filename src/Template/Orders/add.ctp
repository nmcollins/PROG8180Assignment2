<!-- File: src/Template/Orders/add.ctp -->

<h1>Place Order</h1>
<?php
	echo $this->Form->create($order);
	echo $this->Form->input('Size');
	echo $this->Form->input('Crust');
	echo $this->Form->input('ToppingList');
	echo $this->Form->button(_('Place Order'));
	echo $this->Form->end();
?>