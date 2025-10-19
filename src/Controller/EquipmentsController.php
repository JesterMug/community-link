<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Equipments Controller
 *
 * @property \App\Model\Table\EquipmentsTable $Equipments
 */
class EquipmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Equipments->find();
        $equipments = $this->paginate($query);

        $this->set(compact('equipments'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipment = $this->Equipments->get($id, contain: ['EventEquipment', 'PartnerOrganisationEquipment']);
        $this->set(compact('equipment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipment = $this->Equipments->newEmptyEntity();
        if ($this->request->is('post')) {
            $equipment = $this->Equipments->patchEntity($equipment, $this->request->getData());
            if ($this->Equipments->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
        }
        $this->set(compact('equipment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipment = $this->Equipments->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipment = $this->Equipments->patchEntity($equipment, $this->request->getData());
            if ($this->Equipments->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
        }
        $this->set(compact('equipment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipment = $this->Equipments->get($id);
        if ($this->Equipments->delete($equipment)) {
            $this->Flash->success(__('The equipment has been deleted.'));
        } else {
            $this->Flash->error(__('The equipment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
