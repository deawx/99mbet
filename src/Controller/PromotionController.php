<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Promotion Controller
 *
 *
 * @method \App\Model\Entity\Promotion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PromotionController extends AppController {

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
                ->where(['ArticleTypes.name'=>'promotion'])
                ->order(['Articles.created'=>'DESC']);
        $promotions = $q->toArray();
        
        $this->set(compact('promotions'));
    }
    
    public function view(){
        $id = $this->request->query('id');
        $this->Articles = TableRegistry::get('Articles');
        $q = $this->Articles->find()
                ->contain(['ArticleTypes','Images'])
                ->where(['Articles.id'=>$id])
                ->limit(1);
        $promotion = $q->first();
        
        if(is_null($promotion) || $promotion ==''){
            return $this->redirect(['action'=>'index']);
        }
        
        $this->set(compact('promotion'));
    }

}
