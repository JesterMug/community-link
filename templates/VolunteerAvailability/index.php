<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\VolunteerAvailability> $volunteerAvailability
 */
?>
<div class="volunteerAvailability index content">
    <?= $this->Html->link(__('New Volunteer Availability'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Volunteer Availability') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('start_datetime') ?></th>
                    <th><?= $this->Paginator->sort('end_datetime') ?></th>
                    <th><?= $this->Paginator->sort('volunteer_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($volunteerAvailability as $volunteerAvailability): ?>
                <tr>
                    <td><?= $this->Number->format($volunteerAvailability->id) ?></td>
                    <td><?= h($volunteerAvailability->start_datetime) ?></td>
                    <td><?= h($volunteerAvailability->end_datetime) ?></td>
                    <td><?= $volunteerAvailability->hasValue('volunteer') ? $this->Html->link($volunteerAvailability->volunteer->first_name, ['controller' => 'Volunteers', 'action' => 'view', $volunteerAvailability->volunteer->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $volunteerAvailability->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $volunteerAvailability->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $volunteerAvailability->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $volunteerAvailability->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>