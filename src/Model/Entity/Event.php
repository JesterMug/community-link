<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int|null $partner_organisation_id
 * @property string $location
 * @property string $host_organisation
 * @property \Cake\I18n\DateTime $date
 * @property int|null $participants
 * @property string $contact_person_full_name
 * @property string $contact_person_email
 * @property string|null $description
 * @property int|null $required_crews
 * @property string $status
 * @property \Cake\I18n\DateTime $date_created
 * @property \Cake\I18n\DateTime|null $date_modified
 *
 * @property \App\Model\Entity\PartnerOrganisation $partner_organisation
 * @property \App\Model\Entity\EventEquipment[] $event_equipment
 * @property \App\Model\Entity\EventSkill[] $event_skill
 * @property \App\Model\Entity\VolunteerEvent[] $volunteer_event
 */
class Event extends Entity
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
        'partner_organisation_id' => true,
        'location' => true,
        'host_organisation' => true,
        'date' => true,
        'participants' => true,
        'contact_person_full_name' => true,
        'contact_person_email' => true,
        'description' => true,
        'required_crews' => true,
        'status' => true,
        'date_created' => true,
        'date_modified' => true,
        'partner_organisation' => true,
        'event_equipment' => true,
        'event_skill' => true,
        'volunteer_event' => true,
    ];
}
