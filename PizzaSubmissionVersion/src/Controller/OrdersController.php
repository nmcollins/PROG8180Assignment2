<?php
namespace App\Controller;

use App\Controller\AppController;

class OrdersController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		
		$this->loadComponent('Flash');
	}
	
	public function index()
	{				
		$UserId = $this->Auth->user('id');
		$this->Flash->success(_($UserId));
		$UserRole = $this->Auth->user('role');
		
		if ($UserRole == "admin") {
			$this->set('orders', $this->Orders->find('all', array(					
				'order' => array('Orders.Completed ASC'),			
				)));			
		}
		else {
			$this->set('orders', $this->Orders->find('all', array(	
				'conditions' => array('Orders.isOwnedBy' => $UserId),
				'order' => array('Orders.Completed ASC'),			
				)));			
		}
		$this->set(compact('orders'));		
		
		
		
		array(
        'contains' => array(
             'Servicecat' => array(
                 'order' => array('Servicecat.title' => 'DESC')
             )
         ),
         'order' => array('Services.start_year' => 'DESC'));
		
		$this->log('Got here', 'debug');
	}
	
	public function view($OrderNumber)
	{
		echo $OrderNumber;
		$order = $this->orders->get($OrderNumber);
		$this->set(compact('order'));				
		$this->log('Got here', 'debug');		
	}
	
	public function add()
	{
		$order = $this->Orders->newEntity();
					$Id = $this->Auth->user('id');
					$UserName = $this->Auth->user('username');
					$FirstName = $this->Auth->user('FirstName');
					$LastName = $this->Auth->user('LastName');
					$postalCode = $this->Auth->user('postalCode');
					$telephone = $this->Auth->user('telephone');
					$email = $this->Auth->user('email');
					$street = $this->Auth->user('Street');
					$province = $this->Auth->user('province');
					
			$this->Flash->success(_($postalCode));
			$order->set('id', $Id); 
			$order->set('FirstName', $FirstName);
			$order->set('LastName', $LastName);
			$order->set('PostalCode', $postalCode);
			$order->set('telephone', $telephone);
			$order->set('email', $email);
			$order->set('Street', $street);
			$order->set('Province', $province);
		if ($this->request->is('post')) {
			$order = $this->Orders->patchEntity($order, $this->request->data);
			$order->isOwnedBy = $this->Auth->user('id');			

			if ($this->Orders->save($order)) {
				$this->Flash->success(_('Your order has been saved.'));
				
				$orderNumber = $order->OrderNumber;
				return $this->redirect(array("controller" => "Orders", "action" => "summarize", $orderNumber));
				
			}
			$this->Flash->error(_('Unable to add your order.'));
		}
		$this->set('order', $order);
		
	}
	
	public function summarize($id = null)
	{
		$order = $this->Orders->get($id);
		//echo $order;
		$order2 = $this->Orders->find();
		
		//$query = $ordersassociation->find('all', ['contain' => ['Users']]);
		
		echo $order2;
		$Id = $this->Auth->user('id');
		//$Id = $order->Users->get('id');
					$UserName = $this->Auth->user('username');
					$UserName2 = $order->get('username');
					$FirstName = $order->get('username');
					//$FirstName = $this->Auth->user('FirstName');
					$LastName = $this->Auth->user('LastName');
					$postalCode = $this->Auth->user('postalCode');
					$telephone = $this->Auth->user('telephone');
					$email = $this->Auth->user('email');
					$street = $this->Auth->user('Street');
					$province = $this->Auth->user('province');
		
		$order->set('id', $Id); 
			$order->set('FirstName', $FirstName);
			$order->set('LastName', $LastName);
			$order->set('PostalCode', $postalCode);
			$order->set('telephone', $telephone);
			$order->set('email', $email);
			$order->set('Street', $street);
			$order->set('Province', $province);		
		
		$this->set('order', $order);		
	}
	
	
	public function edit($id = null)
	{
		$order = $this->Orders->get($id);	
		
		
		if ($this->request->is(['post', 'put'])) {
			$this->Orders->patchEntity($order, $this->request->data);
			if ($this->Orders->save($order)) {
				$this->Flash->success(_('Your order has been updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to update your order.'));
		
			
		}
		
		$this->set('order', $order);
	}
	
	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		$OrderNumber = $id;
		$order = $this->Orders->get($OrderNumber);
		if ($this->Orders->delete($order)) {
			//$this->Flash->success(_('The order with id: {0} has been deleted.', h($id)));
			$this->Flash->success(_('The order with id: {0} has been deleted.', h($OrderNumber)));
			return $this->redirect(['action' => 'index']);			
		}	
		
	}
	public function isAuthorized($user)
	{
		// All registered users can add articles
		if ($this->request->action === 'add') {
			return true;
		}

		// The owner of an article can edit and delete it
		if (in_array($this->request->action, ['edit', 'delete'])) {
			$OrderNumber = (int)$this->request->params['pass'][0];
			if ($this->Orders->isOwnedBy($OrderNumber, $user['id'])) {
				return true;
			}
		}
		return parent::isAuthorized($user);	
	}
	
	
}
?>