<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Industry $industry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Industry'), ['action' => 'edit', $industry->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Industry'), ['action' => 'delete', $industry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $industry->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Industries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Industry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="industries view content">
            <h3><?= h($industry->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($industry->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($industry->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Partner Organisation Industry') ?></h4>
                <?php if (!empty($industry->partner_organisation_industry)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Partner Organisation Id') ?></th>
                            <th><?= __('Industry Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($industry->partner_organisation_industry as $partnerOrganisationIndustry) : ?>
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