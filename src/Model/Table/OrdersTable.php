<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OrdersTable extends Table
{
	//public $hasMany = array(
     //   'Ordertoppingsassociation' => array(
           // 'className' => 'Ordertoppingsassociation'
            //'conditions' => array('Recipe.approved' => '1'),
           // 'order' => 'Recipe.created DESC'
      //  )
   // );
	
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		//$this->hasMany('ordertoppingsassociation');
		//$this->Ordertoppingsassociation->index();
	}
	
	public function validationDefault(Validator $validator)
	{
		$validator
			->notEmpty('Size')			
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