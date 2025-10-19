<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PartnerOrganisation $partnerOrganisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Partner Organisation'), ['action' => 'edit', $partnerOrganisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Partner Organisation'), ['action' => 'delete', $partnerOrganisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnerOrganisation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Partner Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Partner Organisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="partnerOrganisations view content">
            <h3><?= h($partnerOrganisation->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($partnerOrganisation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($partnerOrganisation->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Person Full Name') ?></th>
                    <td><?= h($partnerOrganisation->contact_person_full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Person Email') ?></th>
                    <td><?= h($partnerOrganisation->contact_person_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Person Phone') ?></th>
                    <td><?= h($partnerOrganisation->contact_person_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($partnerOrganisation->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Services') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($partnerOrganisation->services)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($partnerOrganisation->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Partner Organisation Id') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Host Organisation') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Participants') ?></th>
                            <th><?= __('Contact Person Full Name') ?></th>
                            <th><?= __('Contact Person Email') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Required Crews') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Date Created') ?></th>
                            <th><?= __('Date Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($partnerOrganisation->events as $event) : ?>
                        <tr>
                            <td><?= h($event->id) ?></td>
                            <td><?= h($event->partner_organisation_id) ?></td>
                            <td><?= h($event->location) ?></td>
                            <td><?= h($event->host_organisation) ?></td>
                            <td><?= h($event->date) ?></td>
                            <td><?= h($event->participants) ?></td>
                            <td><?= h($event->contact_person_full_name) ?></td>
                            <td><?= h($event->contact_person_email) ?></td>
                            <td><?= h($event->description) ?></td>
                            <td><?= h($event->required_crews) ?></td>
                            <td><?= h($event->status) ?></td>
                            <td><?= h($event->date_created) ?></td>
                            <td><?= h($event->date_modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $event->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $event->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Events', 'action' => 'delete', $event->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $event->id),
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
                <?php if (!empty($partnerOrganisation->partner_organisation_equipment)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Partner Organisation Id') ?></th>
                            <th><?= __('Equipment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($partnerOrganisation->partner_organisation_equipment as $partnerOrganisationEquipment) : ?>
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
            <div class="related">
                <h4><?= __('Related Partner Organisation Industry') ?></h4>
                <?php if (!empty($partnerOrganisation->partner_organisation_industry)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Partner Organisation Id') ?></th>
                            <th><?= __('Industry Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($partnerOrganisation->partner_organisation_industry as $partnerOrganisationIndustry) : ?>
                        <tr>
                            <td><?= h($partnerOrganisationIndustry->partner_organisation_id) ?></td>
                            <td><?= h($partnerOrganisationIndustry->industry_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PartnerOrganisationIndustry', 'action' => 'view', $partnerOrganisationIndustry->partner_organisation_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PartnerOrganisationIndustry', 'action' => 'edit', $partnerOrganisationIndustry->partner_organisation_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'PartnerOrganisationIndustry', 'action' => 'delete', $partnerOrganisationIndustry->partner_organisation_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $partnerOrganisationIndustry->partner_organisation_id),
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