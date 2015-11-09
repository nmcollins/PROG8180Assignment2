<!-- File: src/Template/Orders/summarize.ctp -->

<h1>Order Summary</h1>
<?php
	echo $this->Form->create($order);		
	echo $this->Form->input('FirstName', array('disabled' => 'disabled'));
	echo $this->Form->input('LastName', array('disabled' => 'disabled'));
	echo $this->Form->input('Street', array('disabled' => 'disabled'));
	echo $this->Form->input('Province', array('disabled' => 'disabled', 'options' => array('ON', 'QC', 'MB', 'SK'), 'empty' => '(choose one)'));
	echo $this->Form->input('PostalCode', array('disabled' => 'disabled'));
	echo $this->Form->input('Size', array('disabled' => 'disabled', 'options' => array('Small', 'Medium', 'Large', 'X-Large'), 'empty' => '(choose one)'), array('type'=>'hidden', 'disabled' => 'disabled'));	
	echo $this->Form->input('Crust', array('disabled' => 'disabled', 'options' => array('Hand-tossed', 'Pan', 'Stuffed', 'Thin'), 'empty' => '(choose one)'));	
	echo $this->Form->input('Pepperoni', array('disabled' => 'disabled'));
	echo $this->Form->input('Mushrooms', array('disabled' => 'disabled'));
	echo $this->Form->input('Sausage', array('disabled' => 'disabled'));
	echo $this->Form->input('Bacon', array('disabled' => 'disabled'));
	echo $this->Form->input('Tomatoes', array('disabled' => 'disabled'));
	echo $this->Form->input('Garlic', array('disabled' => 'disabled'));
	echo $this->Form->input('Onions', array('disabled' => 'disabled'));
	echo $this->Form->input('Spinach', array('disabled' => 'disabled'));
	echo $this->Form->input('Ham', array('disabled' => 'disabled'));
	echo $this->Form->input('Broccoli', array('disabled' => 'disabled'));	
	//echo $this->Form->button(_('Update Order'));
	//if ($order->Size == 1) {
	//   echo 'Size 1'; }
	//else {
	//    echo 'other'; }
//	echo '<br />';
	$totalToppings = 0;
	if ($order->Pepperoni == true) {
	     $totalToppings += 1;}
	if ($order->Mushrooms == true) {
	     $totalToppings += 1;}
	if ($order->Sausage == true) {
	     $totalToppings += 1;}	 
	if ($order->Bacon == true) {
	     $totalToppings += 1;}	 
	if ($order->Tomatoes == true) {
	     $totalToppings += 1;}	 
	if ($order->Garlic == true) {
	     $totalToppings += 1;}
	if ($order->Onions == true) {
	     $totalToppings += 1;}
	if ($order->Spinach == true) {
	     $totalToppings += 1;}	 
	if ($order->Ham == true) {
	     $totalToppings += 1;}	 
	if ($order->Broccoli == true) {
	     $totalToppings += 1;}
		 
    echo "<strong>Total Toppings:</strong>" . $totalToppings;	
	
	//echo "<br />";
	echo " first topping free + $0.50 per additional topping:$";
	$totalForToppings = ($totalToppings - 1) * 0.50;
	echo $totalForToppings;
	//echo "<br />";
	//echo $order->Size;
	$SizeSelected = $order->Size;
	if ($SizeSelected == 0) {
	    $sizeCost = 5.00;
		$sizeDescription = "Small";}
	elseif ($SizeSelected == 1) {
	    $sizeCost = 10.00;
		$sizeDescription = "Medium";}
	elseif ($SizeSelected == 2) {
	    $sizeCost = 15.00 ;
	    $sizeDescription = "Large"; }
	else {
	    $sizeCost = 20.00;
		$sizeDescription = "X-Large"; }
	
	$crustCost = 0;
	if ($order->Crust == 2) {
		 $crustCost = 2.00;
	     echo "Stuffed Crust: $" . $crustCost;		 
	}
	echo "<br />";
	echo "<strong>" . $sizeDescription . " " . "Size: </strong>$" . $sizeCost;
	echo "<br />";
	$subTotal = $crustCost + $sizeCost + $totalForToppings;
	//echo "<br />";
	$province = $order->Province;
	//echo $order->Province;
	//echo '<br />';
	$Taxarray = array(
    "0" => 13,
    "1" => 14.975,
	"2" => 13,
	"3" => 10);
	$taxRate = $Taxarray{$province};
	//echo strVal($taxRate);
	echo "<strong>Subtotal:</strong> $" . $subTotal;
	$taxAmount = ($taxRate / 100) * $subTotal;
	echo "<br />";
	echo '<strong>Provincial Tax at </strong>' . strVal($taxRate) . '% = $' . $taxAmount;
	echo "<br />";
	$totalCost = $subTotal + $taxAmount;
	echo "<strong>Total Cost:</strong>$" . $totalCost;
	
	echo $this->Form->end();
	
	
?>