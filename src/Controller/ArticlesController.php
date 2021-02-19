<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($type = null) {

        $q = $this->Articles->find()
                ->contain(['ArticleTypes'])
                ->where(['ArticleTypes.name' => $type])
                ->order(['Articles.created DESC']);

        $articles = $q->toArray();
        $titleType = '';

        if ($type == 'trick') {
            $titleType = 'เคล็ดลับ';
        } elseif ($type == 'promotion') {
            $titleType = 'โปรโมชั่น';
        }

        $this->set(compact('articles', 'titleType', 'type'));
        $this->set('_serialize', ['articles']);
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view() {
        /*
          $id = $this->request->query('id');

          if(is_null($id) || $id ==''){
          return $this->redirect(['action' => 'index']);
          }
         * 
         */

        $title = $this->request->query('title');
        $article = $this->Articles->findByTitle($title, [
            'contain' => ['ArticleTypes']
        ]);
        $article = $article->toArray();
        if (sizeof($article) > 0) {
            $article = $article[0];
        } else {
            return $this->redirect(['action' => 'show']);
        }

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($type = null) {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $this->log($this->request->getData(), 'debug');
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            //Get Type
            $q = $this->Articles->ArticleTypes->find()
                    ->where(['ArticleTypes.name' => $type]);
            $articleType = $q->first();

            $article->article_type_id = $articleType->id;

            //Image
            $this->loadComponent('UploadImage');
            $file = $this->request->data['upload_file'];
            if (!is_null($file['tmp_name']) && $file['tmp_name'] != '') {
                $image_id = $this->UploadImage->upload($file, $type . '_cover_', null, true);
                $article->image_id = $image_id;
            }


            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index', $type]);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $titleType = '';

        if ($type == 'trick') {
            $titleType = 'เพิ่มเคล็ดลับ';
        }elseif ($type == 'promotion') {
            $titleType = 'เพิ่มโปรโมชั่น';
        }

        $articleTypes = $this->Articles->ArticleTypes->find('list', ['limit' => 200]);
        $this->set(compact('article', 'articleTypes', 'titleType', 'type'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $article = $this->Articles->get($id, [
            'contain' => ['ArticleTypes', 'Images']
        ]);
        $type = $article->article_type->name;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            
            //Image
            $this->loadComponent('UploadImage');
            $file = $this->request->data['upload_file'];
            //$this->log($file,'debug');
            if (!is_null($file['tmp_name']) && $file['tmp_name'] != '') {
                $image_id = $this->UploadImage->upload($file, $type . '_cover_', null, true);
                $article->image_id = $image_id;
            }
            
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index', $type]);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $titleType = '';

        if ($article->article_type->name == 'trick') {
            $titleType = 'แก้ไขเคล็ดลับ';
        }elseif ($type == 'promotion') {
            $titleType = 'แก้ไขโปรโมชั่น';
        }

        //$articleTypes = $this->Articles->ArticleTypes->find('list', ['limit' => 200]);
        $this->set(compact('article', 'titleType', 'type'));
        $this->set('_serialize', ['article']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id, [
            'contain' => ['ArticleTypes']
        ]);
        $type = $article->article_type->name;

        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index', $type]);
    }

    public function show() {

        $this->paginate = [
            'contain' => ['ArticleTypes']
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }

}
