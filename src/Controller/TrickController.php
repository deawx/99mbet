<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Trick Controller
 *
 *
 * @method \App\Model\Entity\Trick[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrickController extends AppController {

    public $Articles = null;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        
        $this->Articles = TableRegistry::get('Articles');
        $q = $this->Articles->find()
                ->contain(['ArticleTypes','Images'])
                ->where(['ArticleTypes.name'=>'trick'])
                ->order(['Articles.created'=>'DESC']);
        $tricks = $q->toArray();
        
        $this->set(compact('tricks'));
    }
    
    public function view(){
        $id = $this->request->query('id');
        $this->Articles = TableRegistry::get('Articles');
        $q = $this->Articles->find()
                ->contain(['ArticleTypes','Images'])
                ->where(['Articles.id'=>$id])
                ->limit(1);
        $trick = $q->first();
        
        if(is_null($trick) || $trick ==''){
            return $this->redirect(['action'=>'index']);
        }
        
        $this->set(compact('trick'));
    }

}
