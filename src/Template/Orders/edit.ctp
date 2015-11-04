<!-- File: src/Template/Articles/edit.ctp -->

<h1>Update Order</h1>
<?php
	echo $this->Form->create($order);	
	echo $this->Form->input('Size',  array('options' => array('Small', 'Medium', 'Large', 'X-Large'), 'empty' => '(choose one)'));
	echo $this->Form->input('Crust', array('options' => array('Hand-tossed', 'Pan', 'Stuffed', 'Thin'), 'empty' => '(choose one)'));	
	echo $this->Form->input('Pepperoni');
	echo $this->Form->input('Mushrooms');
	echo $this->Form->input('Sausage');
	echo $this->Form->input('Bacon');
	echo $this->Form->input('Tomatoes');
	echo $this->Form->input('Garlic');
	echo $this->Form->input('Onions');
	echo $this->Form->input('Spinach');
	echo $this->Form->input('Ham');
	echo $this->Form->input('Broccoli');	
	echo $this->Form->button(_('Update Order'));
	echo $this->Form->end();
?>