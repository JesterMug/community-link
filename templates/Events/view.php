<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="events view content">
            <h3><?= h($event->location) ?></h3>
            <table>
                <tr>
                    <th><?= __('Partner Organisation') ?></th>
                    <td><?= $event->hasValue('partner_organisation') ? $this->Html->link($event->partner_organisation->name, ['controller' => 'PartnerOrganisations', 'action' => 'view', $event->partner_organisation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($event->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Host Organisation') ?></th>
                    <td><?= h($event->host_organisation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Person Full Name') ?></th>
                    <td><?= h($event->contact_person_full_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Person Email') ?></th>
                    <td><?= h($event->contact_person_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($event->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Participants') ?></th>
                    <td><?= $event->participants === null ? '' : $this->Number->format($event->participants) ?></td>
                </tr>
                <tr>
                    <th><?= __('Required Crews') ?></th>
                    <td><?= $event->required_crews === null ? '' : $this->Number->format($event->required_crews) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($event->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= h($event->date_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Modified') ?></th>
                    <td><?= h($event->date_modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Event Equipment') ?></h4>
                <?php if (!empty($event->event_equipment)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Equipment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->event_equipment as $eventEquipment) : ?>
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
                <h4><?= __('Related Event Skill') ?></h4>
                <?php if (!empty($event->event_skill)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->event_skill as $eventSkill) : ?>
                        <tr>
                            <td><?= h($eventSkill->event_id) ?></td>
                            <td><?= h($eventSkill->skill_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'EventSkill', 'action' => 'view', $eventSkill->event_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'EventSkill', 'action' => 'edit', $eventSkill->event_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'EventSkill', 'action' => 'delete', $eventSkill->event_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $eventSkill->event_id),
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
                <h4><?= __('Related Volunteer Event') ?></h4>
                <?php if (!empty($event->volunteer_event)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Volunteer Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->volunteer_event as $volunteerEvent) : ?>
                        <tr>
                            <td><?= h($volunteerEvent->volunteer_id) ?></td>
                            <td><?= h($volunteerEvent->event_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'VolunteerEvent', 'action' => 'view', $volunteerEvent->volunteer_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'VolunteerEvent', 'action' => 'edit', $volunteerEvent->volunteer_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'VolunteerEvent', 'action' => 'delete', $volunteerEvent->volunteer_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $volunteerEvent->volunteer_id),
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