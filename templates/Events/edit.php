<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 * @var string[]|\Cake\Collection\CollectionInterface $partnerOrganisations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Edit Event') ?></legend>
                <?php
                    echo $this->Form->control('partner_organisation_id', ['options' => $partnerOrganisations, 'empty' => true]);
                    echo $this->Form->control('location');
                    echo $this->Form->control('host_organisation');
                    echo $this->Form->control('date');
                    echo $this->Form->control('participants');
                    echo $this->Form->control('contact_person_full_name');
                    echo $this->Form->control('contact_person_email');
                    echo $this->Form->control('description');
                    echo $this->Form->control('required_crews');
                    echo $this->Form->control('status');
                    echo $this->Form->control('date_created');
                    echo $this->Form->control('date_modified');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
