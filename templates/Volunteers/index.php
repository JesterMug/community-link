<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Volunteer> $volunteers
 */
?>
<div class="volunteers index content">
    <?= $this->Html->link(__('New Volunteer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Volunteers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('contact_number') ?></th>
                    <th><?= $this->Paginator->sort('profile_picture_link') ?></th>
                    <th><?= $this->Paginator->sort('official_document_link') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('date_created') ?></th>
                    <th><?= $this->Paginator->sort('date_modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($volunteers as $volunteer): ?>
                <tr>
                    <td><?= $this->Number->format($volunteer->id) ?></td>
                    <td><?= h($volunteer->first_name) ?></td>
                    <td><?= h($volunteer->last_name) ?></td>
                    <td><?= h($volunteer->email) ?></td>
                    <td><?= h($volunteer->contact_number) ?></td>
                    <td><?= h($volunteer->profile_picture_link) ?></td>
                    <td><?= h($volunteer->official_document_link) ?></td>
                    <td><?= h($volunteer->status) ?></td>
                    <td><?= h($volunteer->date_created) ?></td>
                    <td><?= h($volunteer->date_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $volunteer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $volunteer->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $volunteer->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $volunteer->id),
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