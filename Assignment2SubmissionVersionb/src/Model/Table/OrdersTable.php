<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table
{	
	
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		//$ordersassociation = TableRegistry::get('Orders');
		
	}
	
	public function validationDefault(Validator $validator)
	{
		$validator
			->notEmpty('Size')			
			->notEmpty('Crust')
			->requirePresence('Crust');			
			
			
		/*$validator->add('PostalCode', 'custom', [
			   'rule' => array('custom', "^([ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ])\ {0,1}(\d[ABCEGHJKLMNPRSTVWXYZ]\d)$^",),
			   'message' => 'Please enter a valid postal code(X9X9X9)'
			]);*/

		return $validator;		
	}
	
	 
	
	
	public function isOwnedBy($OrderNumber, $isOwnedBy)
	{
		return $this->exists(['OrderNumber' => $OrderNumber, 'isOwnedBy' => $isOwnedBy]);
	}

	
}
?>