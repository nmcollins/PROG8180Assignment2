<?php

class User extends AppModel {
    //public $hasOne = 'Profile';
   // public $hasMany = array(
   //     'Ordertoppingsassociation' => array(
     //       'className' => 'Ordertoppingsassociation'
            //'conditions' => array('Recipe.approved' => '1'),
           // 'order' => 'Recipe.created DESC'
     //   )
   // );
	
	//public $hasMany = 'orders';
	
	public $hasMany = array{
		'order' => array{
		'className' => 'Order',
		'foreignKey' => 'id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' =>'',
		'limit' =>,
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		}
	};
}
?>