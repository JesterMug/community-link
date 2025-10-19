<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PartnerOrganisations Controller
 *
 * @property \App\Model\Table\PartnerOrganisationsTable $PartnerOrganisations
 */
class PartnerOrganisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PartnerOrganisations->find();
        $partnerOrganisations = $this->paginate($query);

        $this->set(compact('partnerOrganisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Partner Organisation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partnerOrganisation = $this->PartnerOrganisations->get($id, contain: ['Events', 'PartnerOrganisationEquipment', 'PartnerOrganisationIndustry']);
        $this->set(compact('partnerOrganisation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partnerOrganisation = $this->PartnerOrganisations->newEmptyEntity();
        if ($this->request->is('post')) {
            $partnerOrganisation = $this->PartnerOrganisations->patchEntity($partnerOrganisation, $this->request->getData());
            if ($this->PartnerOrganisations->save($partnerOrganisation)) {
                $this->Flash->success(__('The partner organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('partnerOrganisation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partner Organisation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partnerOrganisation = $this->PartnerOrganisations->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partnerOrganisation = $this->PartnerOrganisations->patchEntity($partnerOrganisation, $this->request->getData());
            if ($this->PartnerOrganisations->save($partnerOrganisation)) {
                $this->Flash->success(__('The partner organisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner organisation could not be saved. Please, try again.'));
        }
        $this->set(compact('partnerOrganisation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partner Organisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partnerOrganisation = $this->PartnerOrganisations->get($id);
        if ($this->PartnerOrganisations->delete($partnerOrganisation)) {
            $this->Flash->success(__('The partner organisation has been deleted.'));
        } else {
            $this->Flash->error(__('The partner organisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
