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
            <?= $this->Html->link(__('List Volunteers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volunteers form content">
            <?= $this->Form->create($volunteer) ?>
            <fieldset>
                <legend><?= __('Add Volunteer') ?></legend>
                <?php
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact_number');
                    echo $this->Form->control('profile_picture_link');
                    echo $this->Form->control('self_intro');
                    echo $this->Form->control('official_document_link');
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
