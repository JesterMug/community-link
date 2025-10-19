<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="skills view content">
            <h3><?= h($skill->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($skill->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($skill->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Event Skill') ?></h4>
                <?php if (!empty($skill->event_skill)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->event_skill as $eventSkill) : ?>
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
                <h4><?= __('Related Volunteer Skill') ?></h4>
                <?php if (!empty($skill->volunteer_skill)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Volunteer Id') ?></th>
                            <th><?= __('Skill Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($skill->volunteer_skill as $volunteerSkill) : ?>
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