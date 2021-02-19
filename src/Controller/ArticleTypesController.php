<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * ArticleTypes Controller
 *
 * @property \App\Model\Table\ArticleTypesTable $ArticleTypes
 *
 * @method \App\Model\Entity\ArticleType[] paginate($object = null, array $settings = [])
 */
class ArticleTypesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $articleTypes = $this->paginate($this->ArticleTypes);

        $this->set(compact('articleTypes'));
        $this->set('_serialize', ['articleTypes']);
    }

    public function lists() {
        $this->viewBuilder()->layout('admin');
        $q = $this->ArticleTypes->find('all');
        $articleTypes = $q->toArray();

        $this->set(compact('articleTypes'));
        $this->set('_serialize', ['articleTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Article Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $articleType = $this->ArticleTypes->get($id, [
            'contain' => ['Articles']
        ]);

        $this->set('articleType', $articleType);
        $this->set('_serialize', ['articleType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->viewBuilder()->layout('admin');
        $articleType = $this->ArticleTypes->newEntity();
        if ($this->request->is('post')) {
            $articleType = $this->ArticleTypes->patchEntity($articleType, $this->request->getData());
            if ($this->ArticleTypes->save($articleType)) {
                $this->Flash->success(__('The article type has been saved.'));

                return $this->redirect(['action' => 'lists']);
            }
            $this->Flash->error(__('The article type could not be saved. Please, try again.'));
        }
        $this->set(compact('articleType'));
        $this->set('_serialize', ['articleType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->viewBuilder()->layout('admin');
        $articleType = $this->ArticleTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleType = $this->ArticleTypes->patchEntity($articleType, $this->request->getData());
            if ($this->ArticleTypes->save($articleType)) {
                $this->Flash->success(__('The article type has been saved.'));

                return $this->redirect(['action' => 'lists']);
            }
            $this->Flash->error(__('The article type could not be saved. Please, try again.'));
        }
        $this->set(compact('articleType'));
        $this->set('_serialize', ['articleType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $articleType = $this->ArticleTypes->get($id);
        if ($this->ArticleTypes->delete($articleType)) {
            $this->Flash->success(__('The article type has been deleted.'));
        } else {
            $this->Flash->error(__('The article type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'lists']);
    }

}
