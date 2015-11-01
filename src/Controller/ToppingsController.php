<?php
namespace App\Controller;

use App\Controller\AppController;

class ToppingsController extends AppController
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
		
		$this->set('toppings', $this->Toppings->find('all'));		
	}
	
	public function view($id)
	{
		$article = $this->Articles->get($id);
		$this->set(compact('topping'));
	}
	
	public function add()
	{
		$topping = $this->Toppings->newEntity();
		if ($this->request->is('post')) {
			$topping = $this->Toppings->patchEntity($topping, $this->request->data);
			$topping->user_id = $this->Auth->user('id');
			if ($this->Toppings->save($topping)) {
				$this->Flash->success(_('Your article has been saved.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to add your article.'));
		}
		$this->set('topping', $topping);
	}
	
	public function edit($id = null)
	{
		$topping = $this->Toppings->get($id);
		if ($this->request->is(['post', 'put'])) {
			$this->Toppings->patchEntity($topping, $this->request->data);
			if ($this->Toppings->save($topping)) {
				$this->Flash->success(_('Your topping has been updated.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(_('Unable to update your article.'));
		
			
		}
		
		$this->set('topping', $topping);
	}
	
	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		
		$article = $this->Toppings->get($id);
		if ($this->Toppings->delete($topping)) {
			$this->Flash->success(_('The topping with id: {0} has been deleted.', h($id)));
			return $this->redirect(['action' => 'index']);
			
		}	
		
	}
	//public function isAuthorized($user)
	//{
		// All registered users can add articles
	//	if ($this->request->action === 'add') {
	//		return true;
	//	}

		// The owner of an article can edit and delete it
	//	if (in_array($this->request->action, ['edit', 'delete'])) {
	//		$ToppingId = (int)$this->request->params['pass'][0];
	//		if ($this->Toppings->isOwnedBy($ToppingId, $user['id'])) {
	//			return true;
	//		}
	//	}

	//	return parent::isAuthorized($user);
		
	
	
	//}
}
?>