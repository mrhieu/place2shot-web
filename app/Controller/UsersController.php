<?php 
App::uses('Controller', 'Controller');
App::uses('UsersAppController', 'Users.Controller');
class UsersController extends AppController{ 
    var $name = 'Users';
	var $components = array('RequestHandler');
	//var $layout = 'login';
	public function beforeFilter(){
		parent::beforeFilter();
		
			$this->Auth->allow('add');
		
		// if($this->action == 'add' || $this->action =='edit'){
		// 	$this->Auth->authenticate = $this->User;
		// }
	}

	public function isAuthorized($user){
		if($user['roles'] == 'admin'){
			return true;
		}
		if(in_array($this->action, array('edit'))){
			if($user['id'] != $this->request->params['pass'][0]){
				return false;
			}
		}
		return true;

	}
	public function login(){

		if(!$this->Auth->user()){
			if($this->request->is('post')){
				if($this->Auth->login()){
					$this->Session->setFlash('Login seccess!');
					$this->redirect(array("controller" => "photos", "action" => "index"));
				}
				else{
					$this->Session->setFlash('Your username/password combination was incorrect');
				}
			}
		} else{
			$this->redirect(array("controller" => "photos", "action" => "index"));
		}

	}
	
	public function logout(){
		$this->redirect($this->Auth->logout());
	
	}

	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
		if ($this->Auth->user('roles') != 'admin') 
		{
			//$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array("controller" => "photos", "action" => "index"));
		}
	}
	function getusers(){
		if ($this->Auth->user('roles') != 'admin') 
		{
			//$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array("controller" => "photos", "action" => "index"));
		}
		$this->set('users', $this->User->find('all'));
		// $this->set('_serialize', array('users'));
	}
	public function view($id = null) {
		$this->layout = 'profile';
		
		if(!$this->Auth->user()){
		
					
				$this->redirect(array("controller" => "pages", "action" => "home"));
					
			}
		if (!$id) {
			$this->Session->setFlash(__('View Invalid user', true));
			$this->redirect(array('controller' => 'photos','action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));

	}
	
	public function view_relate($id = null) {
		if(!$this->Auth->user()){		
				$this->redirect(array("controller" => "pages", "action" => "home"));
					
			}
		if (!$id) {
			$this->Session->setFlash(__('View Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));

	}
	public function add() {
		
		if($this->Auth->user()){
			if ($this->Auth->user('roles') != 'admin') 
					{
				$this->redirect(array("controller" => "pages", "action" => "home"));
					}
			}
		if ($this->request->is('post')) {
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('The user has been save');
				$this->redirect(array('action' => 'index'));
			}
			else{
				$this->Session->setFlash('The user could not be save');
			}
		}
	}
	
	
	public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->saveField('name', $this->request->data['User']['name'])) {
                //$this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
	public function editpass($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->saveField('password', $this->request->data['User']['password'])) {
                //$this->Session->setFlash(__('The password has been saved'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(
                __('The password could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
	public function editemail($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->saveField('email', $this->request->data['User']['email'])) {
                //$this->Session->setFlash(__('The email has been updated'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(
                __('The email could not be updated. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
	public function editavata($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->saveField('avata', $this->request->data['User']['avata'])) {
                //$this->Session->setFlash(__('The avata has been changed'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(
                __('The avata could not be changed. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
	public function editcover($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->saveField('cover', $this->request->data['User']['cover'])) {
                //$this->Session->setFlash(__('The avata has been changed'));
                return $this->redirect(array('action' => 'view', $id));
            }
            $this->Session->setFlash(
                __('The avata could not be changed. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
	public function delete($id = null) {
		if ($this->Auth->user('roles') != 'admin') {
			$this->redirect(array("controller" => "pages", "action" => "home"));
		}
		else{
			if ($this->User->delete($id)) {
				$this->Session->setFlash(__('User deleted', true));
				$this->redirect(array('action'=>'index'));
			}
				$this->Session->setFlash(__('User was not deleted', true));
				$this->redirect(array('action' => 'index'));
		}
		// if (!$id) {
		// 	$this->Session->setFlash(__('Invalid id for user', true));
		// 	$this->redirect(array('action'=>'index'));
		// }
		
	}
	function search(){
    //checking data
    if(!empty($this->data)&&$this->data['User']['username']!=null){
       
        $users=$this->User->find('all',array('conditions'=>array('username LIKE '=>'%'.$this->data['User']['username'].'%')));
        //post data -> C to V
        $this->set('users',$users);
   	 	}
	}
	
}