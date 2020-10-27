<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Filecatalog Controller
 *
 * @property \App\Model\Table\FilecatalogTable $Filecatalog
 * @method \App\Model\Entity\Filecatalog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilecatalogController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $filecatalog = $this->paginate($this->Filecatalog);

        $this->set(compact('filecatalog'));
    }

    /**
     * View method
     *
     * @param string|null $id Filecatalog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filecatalog = $this->Filecatalog->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('filecatalog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filecatalog = $this->Filecatalog->newEmptyEntity();
        if ($this->request->is('post')) {
            $filecatalog = $this->Filecatalog->patchEntity($filecatalog, $this->request->getData());

           
                $file = $this->request->getData('file_name');
               
                $name = $file->getClientFilename();

                $path = WWW_ROOT.'MEDIA'.DS.$name;

                $file->moveTo($path);

                $filecatalog->file_name = $name;


            if ($this->Filecatalog->save($filecatalog)) {
                $this->Flash->success(__('O arquivo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O arquivo não pôde ser salvo, tente novamente.'));
        }
        $this->set(compact('filecatalog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Filecatalog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filecatalog = $this->Filecatalog->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filecatalog = $this->Filecatalog->patchEntity($filecatalog, $this->request->getData());
            if ($this->Filecatalog->save($filecatalog)) {
                $this->Flash->success(__('O arquivo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O arquivo não pôde ser salvo, por favor, tente novamente.'));
        }
        $this->set(compact('filecatalog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Filecatalog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filecatalog = $this->Filecatalog->get($id);
        if ($this->Filecatalog->delete($filecatalog)) {
            $this->Flash->success(__('O arquivo foi deletado.'));
        } else {
            $this->Flash->error(__('O arquivo não pôde ser deletado, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
