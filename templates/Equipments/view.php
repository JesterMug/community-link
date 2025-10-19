<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipment $equipment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Equipments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Equipment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipments view content">
            <h3><?= h($equipment->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($equipment->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($equipment->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Equipment') ?></h4>
                <?php if (!empty($equipment->event_equipment)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Equipment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipment->event_equipment as $eventEquipment) : ?>
                        <tr>
                            <td><?= h($eventEquipment->event_id) ?></td>
                            <td><?= h($eventEquipment->equipment_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventEquipment', 'action' => 'view', $eventEquipment->event_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventEquipment', 'action' => 'edit', $eventEquipment->event_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'EventEquipment', 'action' => 'delete', $eventEquipment->event_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $eventEquipment->event_id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Partner Organisation Equipment') ?></h4>
                <?php if (!empty($equipment->partner_organisation_equipment)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Partner Organisation Id') ?></th>
                            <th><?= __('Equipment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipment->partner_organisation_equipment as $partnerOrganisationEquipment) : ?>
                        <tr>
                            <td><?= h($partnerOrganisationEquipment->partner_organisation_id) ?></td>
                            <td><?= h($partnerOrganisationEquipment->equipment_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PartnerOrganisationEquipment', 'action' => 'view', $partnerOrganisationEquipment->partner_organisation_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PartnerOrganisationEquipment', 'action' => 'edit', $partnerOrganisationEquipment->partner_organisation_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'PartnerOrganisationEquipment', 'action' => 'delete', $partnerOrganisationEquipment->partner_organisation_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $partnerOrganisationEquipment->partner_organisation_id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>