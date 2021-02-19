<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Contents Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[] paginate($object = null, array $settings = [])
 */
class ContentsController extends AppController {

    public $type = null;
    public $title = "";

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->type = $this->request->query('type');
        if ($this->type == 's') {
            $this->title = 'Sport';
        } else if ($this->type == 'c') {
            $this->title = 'Casino';
        } else {
            return $this->redirect(['controller' => 'adminhome']);
        }
        $this->set('type', $this->type);
        $this->set('title', $this->title);
        $this->viewBuilder()->layout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $query = $this->Contents->find('all')
                ->contain(['Images'])
                ->where(['Contents.type' => $this->type])
                ->order(['Contents.seq'=>'ASC']);
        $contents = $query->toArray();
        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);
    }

    public function sport() {
        $this->paginate = [
            'contain' => ['Images']
        ];
        $contents = $this->paginate($this->Contents);

        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);
    }

    /**
     * View method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $content = $this->Contents->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('content', $content);
        $this->set('_serialize', ['content']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $content = $this->Contents->newEntity();
        if ($this->request->is('post')) {
            $content = $this->Contents->patchEntity($content, $this->request->getData());
            $content->type = $this->type;
            if ($this->Contents->save($content)) {

                //Upload image
                $this->loadComponent('UploadImage');
                $file = $this->request->data['upload_file'];
                $image_id = $this->UploadImage->upload($file, 'block_', null, true);
                $content->image_id = $image_id;
                $this->Contents->save($content);

                $this->Flash->success(__('The content has been saved.'));

                return $this->redirect(['action' => 'index', 'type' => $this->type]);
            }
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $images = $this->Contents->Images->find('list', ['limit' => 200]);
        $this->set(compact('content', 'images'));
        $this->set('_serialize', ['content']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $content = $this->Contents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $content = $this->Contents->patchEntity($content, $this->request->getData());
            if ($this->Contents->save($content)) {
                //Upload image
                $this->loadComponent('UploadImage');
                $file = $this->request->data['upload_file'];
                $image_id = $this->UploadImage->upload($file, 'block_', null, true);
                if ($image_id != null && $image_id != '') {
                    $content->image_id = $image_id;
                    $this->Contents->save($content);
                }


                $this->Flash->success(__('The content has been saved.'));

                return $this->redirect(['action' => 'index', 'type' => $this->type]);
            }
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $images = $this->Contents->Images->find('list', ['limit' => 200]);
        $this->set(compact('content', 'images'));
        $this->set('_serialize', ['content']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $content = $this->Contents->get($id);
        if ($this->Contents->delete($content)) {
            $this->Flash->success(__('The content has been deleted.'));
        } else {
            $this->Flash->error(__('The content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index', 'type' => $this->type]);
    }

}
