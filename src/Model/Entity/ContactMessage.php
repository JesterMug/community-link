<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactMessage Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $contact_number
 * @property string $email
 * @property string $message
 * @property bool $replied_to
 * @property \Cake\I18n\DateTime $date_created
 * @property \Cake\I18n\DateTime|null $date_modified
 */
class ContactMessage extends Entity
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
        'contact_number' => true,
        'email' => true,
        'message' => true,
        'replied_to' => true,
        'date_created' => true,
        'date_modified' => true,
    ];
}
