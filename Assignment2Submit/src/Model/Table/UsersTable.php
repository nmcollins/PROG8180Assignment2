<?php

// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('LastName', 'Please enter a last name')
			->notEmpty('FirstName', 'Please enter a first name')
			->notEmpty('Street', 'Please enter a street')
			->notEmpty('province', 'Please enter a province')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['admin', 'author']],
                'message' => 'Please enter a valid role'
            ])
			->add('postalCode', 'custom', [
			   'rule' => array('custom', "^([ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]\d[ABCEGHJKLMNPRSTVWXYZabceghjklmnprstvxy])\ {0,1}(\d[ABCEGHJKLMNPRSTVWXYZabceghjklmnprstvxy]\d)$^",),
			   'message' => 'Please enter a valid postal code(X9X9X9)'])
			 ->add('telephone', 'custom', [  
			   'rule' => array('custom', "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",),
			   'message' => 'Please enter a valid phone number(999-999-9999)'])  
			   
			->add('email', 'custom', [  
			   'rule' => array('custom', "/^\S+@\S+$/",),
			   'message' => 'Please enter a valid phone email address'])  
			   ;	
		
    }

}
?>