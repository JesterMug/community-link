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
            <?= $this->Html->link(__('List Partner Organisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="partnerOrganisations form content">
            <?= $this->Form->create($partnerOrganisation) ?>
            <fieldset>
                <legend><?= __('Add Partner Organisation') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('contact_person_full_name');
                    echo $this->Form->control('contact_person_email');
                    echo $this->Form->control('contact_person_phone');
                    echo $this->Form->control('services');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
