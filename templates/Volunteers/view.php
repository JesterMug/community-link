<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteer $volunteer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Volunteer'), ['action' => 'edit', $volunteer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Volunteer'), ['action' => 'delete', $volunteer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $volunteer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Volunteers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Volunteer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volunteers view content">
            <h3><?= h($volunteer->first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($volunteer->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($volunteer->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($volunteer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Number') ?></th>
                    <td><?= h($volunteer->contact_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile Picture Link') ?></th>
                    <td><?= h($volunteer->profile_picture_link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Document Link') ?></th>
                    <td><?= h($volunteer->official_document_link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($volunteer->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($volunteer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= h($volunteer->date_created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Modified') ?></th>
                    <td><?= h($volunteer->date_modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Self Intro') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($volunteer->self_intro)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($volunteer->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Nonce') ?></th>
                            <th><?= __('Nonce Expiry') ?></th>
                            <th><?= __('Role') ?></th>
                            <th><?= __('Volunteer Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($volunteer->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->nonce) ?></td>
                            <td><?= h($user->nonce_expiry) ?></td>
                            <td><?= h($user->role) ?></td>
                            <td><?= h($user->volunteer_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Users', 'action' => 'delete', $user->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
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
                <h4><?= __('Related Volunteer Availability') ?></h4>
                <?php if (!empty($volunteer->volunteer_availability)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Start Datetime') ?></th>
                            <th><?= __('End Datetime') ?></th>
                            <th><?= __('Volunteer Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($volunteer->volunteer_availability as $volunteerAvailability) : ?>
                        <tr>
                            <td><?= h($volunteerAvailability->id) ?></td>
                            <td><?= h($volunteerAvailability->start_datetime) ?></td>
                            <td><?= h($volunteerAvailability->end_datetime) ?></td>
                            <td><?= h($volunteerAvailability->volunteer_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'VolunteerAvailability', 'action' => 'view', $volunteerAvailability->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'VolunteerAvailability', 'action' => 'edit', $volunteerAvailability->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'VolunteerAvailability', 'action' => 'delete', $volunteerAvailability->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $volunteerAvailability->id),
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
                <?php if (!empty($volunteer->volunteer_event)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Volunteer Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($volunteer->volunteer_event as $volunteerEvent) : ?>
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
            <div class="related">
                <h4><?= __('Related Volunteer Skill') ?></h4>
                <?php if (!empty($volunteer->volunteer_skill)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Volunteer Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($volunteer->volunteer_skill as $volunteerSkill) : ?>
                        <tr>
                            <td><?= h($volunteerSkill->volunteer_id) ?></td>
                            <td><?= h($volunteerSkill->skill_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'VolunteerSkill', 'action' => 'view', $volunteerSkill->volunteer_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'VolunteerSkill', 'action' => 'edit', $volunteerSkill->volunteer_id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'VolunteerSkill', 'action' => 'delete', $volunteerSkill->volunteer_id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $volunteerSkill->volunteer_id),
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