<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Tests Controller
 *
 *
 * @method \App\Model\Entity\Test[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        
        $homepage = file_get_contents('https://connect-th.beinsports.com/th');
        
        $this->set(compact('homepage'));
    }

}
