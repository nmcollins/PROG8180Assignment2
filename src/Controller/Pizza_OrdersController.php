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
		//$articles = $this->Articles->find('all');
		//$this->set(compact('articles'));
		
		$this->set('pizza_orders', $this->pizza_orders->find('all'));		
	}
	
	public function view($id)
	{
		$pizza_orders = $this->pizza_orders->get($OrderNumber);
		$this->set(compact('pizza_orders'));
	}
	
	public function add()
	{
		$pizza_orders = $this->Orders->newEntity();
		if ($this->request->is('post')) {
			$pizza_orders = $this->Orders->patchEntity($pizza_orders, $this->request->data);
			$pizza_orders->user_id = $this->Auth->user('isOwnedBy');
			if ($this->Orders->save($orders)) {
				$this->Flash->success(_('Your order has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to add your article.'));
		}
		$this->set('pizza_orders', $article);
	}
	
	public function edit($id = null)
	{
		$article = $this->Orders->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Articles->patchEntity($orders, $this->request->data);
			if ($this->Articles->save($orders)) {
				$this->Flash->success(_('Your order has been updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to update your order.'));
		
			
		}
		
		$this->set('orders', $orders);
	}
	
	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		
		$article = $this->Orders->get($id);
		if ($this->Orders->delete($pizza_orders)) {
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
			if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
				return true;
			}
		}

		return parent::isAuthorized($user);
		
	
	
	}
}
?>