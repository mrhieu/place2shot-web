<?php
App::uses('Controller', 'Controller');
class PhotosController extends AppController {

	var $name = 'Photos';
	var $components = array('RequestHandler');
	
	// public $paginate = array(
	// 	'limit' => 10,
	// 	'order' => array(
	// 	'Post.start_date' => 'desc'
	// 	)
	// );
	function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('edit', 'delete'))) {
        $photoId = (int) $this->request->params['pass'][0];
        if ($this->Photo->isOwnedBy($photoID, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
}
	function index() {
		$this->Photo->recursive = 0;
		$this->set('photos', $this->paginate());
		
		/*if ($this->Auth->user('roles') != 'admin'){
		$this->set('posts', $this->Post->find('all', array('conditions' => array('user_id' => $this->Auth->user('id')))));
		}*/
	}
	function getphotos(){
		$this->set('photos', $this->Photo->find('all'));
		//$this->set('_serialize', array('posts'));
	}
	function view($id = null) {
		if (!$id) {
            throw new NotFoundException(__('Invalid photo'));
        }

        $photo = $this->Photo->findById($id);
        if (!$photo) {
            throw new NotFoundException(__('Invalid photo'));
        }
        $this->set('photo', $photo);
      
	}
	
	function add() {
		  if ($this->request->is('post')) {
            $this->Photo->create();
            if ($this->Photo->save($this->request->data)) {
                $this->Session->setFlash(__('Your photo has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your photo.'));
        }
		$users = $this->Photo->User->find('list');
		$this->set(compact('users'));
		$galleries = $this->Photo->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	function edit($id = null) {
		//check Post.user_id against session User.id to prevent editing posts not posted by the current user
		$photo = $this->Photo->find('first', array(
		        'conditions' => array('Photo.id' => $id, 'Photo.user_id' => $this->Auth->user('id')),
		        'recursive'  => -1
		    ));
	    if (!$photo) 
		{
			if ($this->Auth->user('roles') != 'admin') 
			{
	        	//$this->cakeError('error404');
				$this->Session->setFlash(__('You do no have the ability to edit this photo.', true));
				$this->redirect(array('action' => 'index'));
			}
			
	    }
	
		 if (!$id) {
        throw new NotFoundException(__('Invalid photo'));
	    }

	    $photo = $this->Photo->findById($id);
	    if (!$photo) {
	        throw new NotFoundException(__('Invalid photo'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Photo->id = $id;
	        if ($this->Photo->save($this->request->data)) {
	            $this->Session->setFlash(__('Your photo has been updated.'));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your photo.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $photo;
	    }
		$users = $this->Photo->User->find('list');
		$this->set(compact('users'));
		$galleries = $this->Photo->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	function delete($id = null) {
		//check Post.user_id against session User.id to prevent deleting posts not posted by the current user
		$photo = $this->Photo->find('first', array(
		        'conditions' => array('Photo.id' => $id, 'Photo.user_id' => $this->Auth->user('id')),
		        'recursive'  => -1
		    ));
	    if (!$photo) 
		{
			if ($this->Auth->user('roles') != 'admin') 
			{
	        	//$this->cakeError('error404');
				$this->Session->setFlash(__('You do no have the ability to delete this photo.', true));
				$this->redirect(array('action' => 'index'));
			}
			
	    }
		
		if (!$id) 
		{
			$this->Session->setFlash(__('Invalid id for photo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Photo->delete($id)) {
			$this->Session->setFlash(__('Photo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Photo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	/*function admin_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid post', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Post->create();
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(__('The post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
		$galleries = $this->Post->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid post', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Post->save($this->data)) {
				$this->Session->setFlash(__('The post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Post->read(null, $id);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
		$galleries = $this->Post->Gallery->find('list');
		$this->set(compact('galleries'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for post', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(__('Post deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Post was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
}
