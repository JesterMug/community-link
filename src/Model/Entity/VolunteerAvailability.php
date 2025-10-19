<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VolunteerAvailability Entity
 *
 * @property int $id
 * @property \Cake\I18n\DateTime $start_datetime
 * @property \Cake\I18n\DateTime $end_datetime
 * @property int $volunteer_id
 *
 * @property \App\Model\Entity\Volunteer $volunteer
 */
class VolunteerAvailability extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'start_datetime' => true,
        'end_datetime' => true,
        'volunteer_id' => true,
        'volunteer' => true,
    ];
}
