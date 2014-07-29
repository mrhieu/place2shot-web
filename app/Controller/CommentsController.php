<?php

App::uses('Controller', 'Controller');
class CommentsController extends AppController {

	var $name = 'Comments';
	var $components = array('RequestHandler');
	function index() {
		if ($this->Auth->user('roles') != 'admin') 
		{
			//$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array("controller" => "photos", "action" => "index"));
		}
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}
	function getcomments(){
		if ($this->Auth->user('roles') != 'admin') 
		{
			//$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array("controller" => "photos", "action" => "index"));
		}
		$this->set('comments', $this->Comment->find('all'));
		//$this->set('_serialize', array('comments'));
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		 //$sql = "SELECT users.username FROM users,comments WHERE comments.user_id=users.id";
		//$users = $this->Comment->User->query($sql);
		
		$users = $this->Comment->User->find('list');
		$this->set(compact('users'));
		// $post = $this->Comment->find('first', array(
		//         'conditions' => array(	
		// 								//'Comment.id' => $id,
		// 		 						'Comment.post_id' => $this->Post->$post['Post']['id'],
										
 	// 								),
		//         'recursive'  => -1
		//     ));
		//debug($this->request->url);
		
		//$post_id = $this->request->query('id');
		
		//$post_id = $this->request->params['url']['id'];
		$photos = $this->Comment->Photo->find('list');
		$this->set('photos', $photos);
		
	}

	function edit($id = null) {
		//check Post.user_id against session User.id to prevent editing posts not posted by the current user
	
		$comment = $this->Comment->find('first', array(
		        'conditions' => array(	
										'Comment.id' => $id,
				 						'Comment.user_id' => $this->Auth->user('id'),
										
 									),
		        'recursive'  => -1
		    ));
	    if (!$comment) 
		{
			if ($this->Auth->user('roles') != 'admin') 
			{
	        	//$this->cakeError('error404');
				$this->Session->setFlash(__('You do no have the ability to edit this comment.', true));
				$this->redirect(array('action' => 'index'));
			}
			
	    }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Comment->read(null, $id);
		}
		
		$users = $this->Comment->User->find('list');
		$this->set(compact('users'));
		$photos = $this->Comment->Photo->find('list');
		$this->set(compact('photos'));
	}

	function delete($id = null) {
		$comment = $this->Comment->find('first', array(
		        'conditions' => array('Comment.id' => $id, 'Comment.user_id' => $this->Auth->user('id')),
		        'recursive'  => -1
		    ));
	    if (!$comment) 
		{
			if ($this->Auth->user('roles') != 'admin') 
			{
	        	//$this->cakeError('error404');
				$this->Session->setFlash(__('You do no have the ability to delete this comment.', true));
				$this->redirect(array('action' => 'index'));
			}
			
	    }
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Comment->delete($id)) {
			$this->Session->setFlash(__('Comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
