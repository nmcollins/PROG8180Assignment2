<?php

class Order extends AppModel {
    //public $hasOne = 'Profile';
    //public $hasMany = array(
     //   'Ordertoppingsassociation' => array(
     //       'className' => 'Ordertoppingsassociation'
            //'conditions' => array('Recipe.approved' => '1'),
           // 'order' => 'Recipe.created DESC'
     //   )
   // );
	
	public $belongsTo = 'User';
}
?>