<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PartnerOrganisation Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact_person_full_name
 * @property string $contact_person_email
 * @property string $contact_person_phone
 * @property string|null $services
 *
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\PartnerOrganisationEquipment[] $partner_organisation_equipment
 * @property \App\Model\Entity\PartnerOrganisationIndustry[] $partner_organisation_industry
 */
class PartnerOrganisation extends Entity
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
        'name' => true,
        'address' => true,
        'contact_person_full_name' => true,
        'contact_person_email' => true,
        'contact_person_phone' => true,
        'services' => true,
        'events' => true,
        'partner_organisation_equipment' => true,
        'partner_organisation_industry' => true,
    ];
}
