<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Volunteer Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $contact_number
 * @property string $profile_picture_link
 * @property string $self_intro
 * @property string $official_document_link
 * @property string $status
 * @property \Cake\I18n\DateTime $date_created
 * @property \Cake\I18n\DateTime|null $date_modified
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\VolunteerAvailability[] $volunteer_availability
 * @property \App\Model\Entity\VolunteerEvent[] $volunteer_event
 * @property \App\Model\Entity\VolunteerSkill[] $volunteer_skill
 */
class Volunteer extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'contact_number' => true,
        'profile_picture_link' => true,
        'self_intro' => true,
        'official_document_link' => true,
        'status' => true,
        'date_created' => true,
        'date_modified' => true,
        'users' => true,
        'volunteer_availability' => true,
        'volunteer_event' => true,
        'volunteer_skill' => true,
    ];
}
