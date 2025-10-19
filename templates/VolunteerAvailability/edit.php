<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VolunteerAvailability $volunteerAvailability
 * @var string[]|\Cake\Collection\CollectionInterface $volunteers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $volunteerAvailability->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $volunteerAvailability->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Volunteer Availability'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volunteerAvailability form content">
            <?= $this->Form->create($volunteerAvailability) ?>
            <fieldset>
                <legend><?= __('Edit Volunteer Availability') ?></legend>
                <?php
                    echo $this->Form->control('start_datetime');
                    echo $this->Form->control('end_datetime');
                    echo $this->Form->control('volunteer_id', ['options' => $volunteers]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
