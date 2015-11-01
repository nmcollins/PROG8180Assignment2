<!-- File: src/Template/Articles/edit.ctp -->

<h1>Update Order</h1>
<?php
	echo $this->Form->create($order);
	echo $this->Form->input('Size');
	echo $this->Form->input('Crust');
	echo $this->Form->input('ToppingList');
	echo $this->Form->button(_('Update Order'));
	echo $this->Form->end();
?>