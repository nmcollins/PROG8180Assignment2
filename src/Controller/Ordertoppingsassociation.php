<?php
namespace App\Controller;

use App\Controller\AppController;

class Ordertoppingsassociation extends AppController
{
	public function initialize()
	{
		parent::initialize();
		
		$this->loadComponent('Flash');
	}
	
	public function index()
	{
		//$articles = $this->Articles->find('all');
		//$this->set(compact('articles'));
		
		//$this->set('ordertoppingsassociations', $this->Ordertoppingsassociations->find('all'));	
		//$this->set(compact('ordertoppingsassociations'));		
		//$this->set('toppings', $this->Order->Ordertoppingsassociation->find('all'));
		
		//$query = $this->find('all')->contain(['ordertoppingsassociation']);
		//foreach ($query as $order) {
		   //      echo $order->ordertoppingsassociation[0]->text;
		//}
		
		$this->log('Got here', 'debug');
	}
	
	/*public function view($id)
	{
		$orders = $this->orders->get($OrderNumber);
		$this->set(compact('orders'));
		
		$query = $orders->find('all')->contain(['Ordertoppingsassociation']);
		foreach ($query as $order) {
		         echo $order->ordertoppingsassociation[0]->text;
		}
		
		$this->log('Got here', 'debug');
		//$this->set('toppings', $this->Order->Ordertoppingsassociation->find('all'));
	}*/
	
	/*public function add()
	{
		$order = $this->Orders->newEntity();
		if ($this->request->is('post')) {
			$order = $this->Orders->patchEntity($order, $this->request->data);
			$order->isOwnedBy = $this->Auth->user('id');
			if ($this->Orders->save($order)) {
				$this->Flash->success(_('Your order has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to add your order.'));
		}
		$this->set('order', $order);
		//$this->set('toppings', $this->Order->Ordertoppingsassociation->find('list'));
	}*/
	
	/*public function edit($id = null)
	{
		$order = $this->Orders->get($id);
		
		//$query = $this->find('all')->contain(['ordertoppingsassociation']);
		//foreach ($query as $order) {
		//         echo $order->ordertoppingsassociation[0]->text;
		//}
		
		//$this->set('ordertoppingsassociation', $this->Order->Ordertoppingsassociation->find('list));
		
		if ($this->request->is(['post', 'put'])) {
			$this->Orders->patchEntity($order, $this->request->data);
			if ($this->Orders->save($order)) {
				$this->Flash->success(_('Your order has been updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to update your order.'));
		
			
		}
		//$this->set('ordertoppingsassociation', $this->Order->Ordertoppingsassociation->find('all'));
		$this->set('order', $order);
	}
	
	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		
		$article = $this->Orders->get($id);
		if ($this->Orders->delete($orders)) {
			$this->Flash->success(_('The order with id: {0} has been deleted.', h($id)));
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
		
	
	
	}*/
}
?>