<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VolunteerAvailability $volunteerAvailability
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Volunteer Availability'), ['action' => 'edit', $volunteerAvailability->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Volunteer Availability'), ['action' => 'delete', $volunteerAvailability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $volunteerAvailability->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Volunteer Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Volunteer Availability'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volunteerAvailability view content">
            <h3><?= h($volunteerAvailability->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Volunteer') ?></th>
                    <td><?= $volunteerAvailability->hasValue('volunteer') ? $this->Html->link($volunteerAvailability->volunteer->first_name, ['controller' => 'Volunteers', 'action' => 'view', $volunteerAvailability->volunteer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($volunteerAvailability->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Datetime') ?></th>
                    <td><?= h($volunteerAvailability->start_datetime) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Datetime') ?></th>
                    <td><?= h($volunteerAvailability->end_datetime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>