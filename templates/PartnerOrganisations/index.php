<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PartnerOrganisation> $partnerOrganisations
 */
?>
<div class="partnerOrganisations index content">
    <?= $this->Html->link(__('New Partner Organisation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Partner Organisations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('contact_person_full_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_person_email') ?></th>
                    <th><?= $this->Paginator->sort('contact_person_phone') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($partnerOrganisations as $partnerOrganisation): ?>
                <tr>
                    <td><?= $this->Number->format($partnerOrganisation->id) ?></td>
                    <td><?= h($partnerOrganisation->name) ?></td>
                    <td><?= h($partnerOrganisation->address) ?></td>
                    <td><?= h($partnerOrganisation->contact_person_full_name) ?></td>
                    <td><?= h($partnerOrganisation->contact_person_email) ?></td>
                    <td><?= h($partnerOrganisation->contact_person_phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $partnerOrganisation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partnerOrganisation->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $partnerOrganisation->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $partnerOrganisation->id),
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