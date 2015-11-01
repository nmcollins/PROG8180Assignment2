<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		$this->hasMany('ordertoppingsassociation');
	}
	
	public function validationDefault(Validator $validator)
	{
		$validator
			->notEmpty('Size')
			->requirePresence('Size')
			->notEmpty('Crust')
			->requirePresence('Crust');
			
		return $validator;
		
	}
	
	public function isOwnedBy($OrderNumber, $isOwnedBy)
	{
		return $this->exists(['OrderNumber' => $OrderNumber, 'isOwnedBy' => $isOwnedBy]);
	}

}
?>