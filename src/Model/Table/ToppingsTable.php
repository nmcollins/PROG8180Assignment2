<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ToppingsTable extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
	}
	
	public function validationDefault(Validator $validator)
	{
		$validator
			->notEmpty('Description');
			
			
		return $validator;
		
	}
	
	//public function isOwnedBy($OrderNumber, $isOwnedBy)
	//{
	//	return $this->exists(['OrderNumber' => $OrderNumber, 'isOwnedBy' => $isOwnedBy]);
	//}

}
?>