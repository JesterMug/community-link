<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Event> $events
 */
?>
<div class="events index content">
    <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('partner_organisation_id') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('host_organisation') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('participants') ?></th>
                    <th><?= $this->Paginator->sort('contact_person_full_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_person_email') ?></th>
                    <th><?= $this->Paginator->sort('required_crews') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('date_created') ?></th>
                    <th><?= $this->Paginator->sort('date_modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= $event->hasValue('partner_organisation') ? $this->Html->link($event->partner_organisation->name, ['controller' => 'PartnerOrganisations', 'action' => 'view', $event->partner_organisation->id]) : '' ?></td>
                    <td><?= h($event->location) ?></td>
                    <td><?= h($event->host_organisation) ?></td>
                    <td><?= h($event->date) ?></td>
                    <td><?= $event->participants === null ? '' : $this->Number->format($event->participants) ?></td>
                    <td><?= h($event->contact_person_full_name) ?></td>
                    <td><?= h($event->contact_person_email) ?></td>
                    <td><?= $event->required_crews === null ? '' : $this->Number->format($event->required_crews) ?></td>
                    <td><?= h($event->status) ?></td>
                    <td><?= h($event->date_created) ?></td>
                    <td><?= h($event->date_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $event->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $event->id),
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