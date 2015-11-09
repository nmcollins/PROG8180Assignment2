<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class Order extends Table
{
	public function initialize(array $config)
	{
		$this->addBehavior('Timestamp');
		$this->hasMany('Ordertoppingsassociation' [
		'foreignKey' => 'OrderNumber',
		'dependent' => true,
		]);
	}
	
	

}
?>