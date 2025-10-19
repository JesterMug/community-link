<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * VolunteerAvailability Controller
 *
 * @property \App\Model\Table\VolunteerAvailabilityTable $VolunteerAvailability
 */
class VolunteerAvailabilityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->VolunteerAvailability->find()
            ->contain(['Volunteers']);
        $volunteerAvailability = $this->paginate($query);

        $this->set(compact('volunteerAvailability'));
    }

    /**
     * View method
     *
     * @param string|null $id Volunteer Availability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $volunteerAvailability = $this->VolunteerAvailability->get($id, contain: ['Volunteers']);
        $this->set(compact('volunteerAvailability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $volunteerAvailability = $this->VolunteerAvailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $volunteerAvailability = $this->VolunteerAvailability->patchEntity($volunteerAvailability, $this->request->getData());
            if ($this->VolunteerAvailability->save($volunteerAvailability)) {
                $this->Flash->success(__('The volunteer availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volunteer availability could not be saved. Please, try again.'));
        }
        $volunteers = $this->VolunteerAvailability->Volunteers->find('list', limit: 200)->all();
        $this->set(compact('volunteerAvailability', 'volunteers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Volunteer Availability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $volunteerAvailability = $this->VolunteerAvailability->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $volunteerAvailability = $this->VolunteerAvailability->patchEntity($volunteerAvailability, $this->request->getData());
            if ($this->VolunteerAvailability->save($volunteerAvailability)) {
                $this->Flash->success(__('The volunteer availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The volunteer availability could not be saved. Please, try again.'));
        }
        $volunteers = $this->VolunteerAvailability->Volunteers->find('list', limit: 200)->all();
        $this->set(compact('volunteerAvailability', 'volunteers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Volunteer Availability id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $volunteerAvailability = $this->VolunteerAvailability->get($id);
        if ($this->VolunteerAvailability->delete($volunteerAvailability)) {
            $this->Flash->success(__('The volunteer availability has been deleted.'));
        } else {
            $this->Flash->error(__('The volunteer availability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
