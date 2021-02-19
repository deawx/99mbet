<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Login Controller
 *
 *
 * @method \App\Model\Entity\Login[] paginate($object = null, array $settings = [])
 */
class LoginController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin_login');
        $this->Users = TableRegistry::get('Users');
    }

    public function index() {

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $user = $this->Users->get($user['id']);
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'adminhome', 'action' => 'index']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function logout() {

        $this->request->session()->destroy();
        $this->redirect(['controller' => 'home']);
    }

}
