<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Volunteers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\VolunteerAvailabilityTable&\Cake\ORM\Association\HasMany $VolunteerAvailability
 * @property \App\Model\Table\VolunteerEventTable&\Cake\ORM\Association\HasMany $VolunteerEvent
 * @property \App\Model\Table\VolunteerSkillTable&\Cake\ORM\Association\HasMany $VolunteerSkill
 *
 * @method \App\Model\Entity\Volunteer newEmptyEntity()
 * @method \App\Model\Entity\Volunteer newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Volunteer> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Volunteer get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Volunteer findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Volunteer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Volunteer> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Volunteer|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Volunteer saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Volunteer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volunteer>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volunteer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volunteer> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volunteer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volunteer>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Volunteer>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Volunteer> deleteManyOrFail(iterable $entities, array $options = [])
 */
class VolunteersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('volunteers');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'volunteer_id',
        ]);
        $this->hasMany('VolunteerAvailability', [
            'foreignKey' => 'volunteer_id',
        ]);
        $this->hasMany('VolunteerEvent', [
            'foreignKey' => 'volunteer_id',
        ]);
        $this->hasMany('VolunteerSkill', [
            'foreignKey' => 'volunteer_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 127)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 127)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('contact_number')
            ->maxLength('contact_number', 20)
            ->requirePresence('contact_number', 'create')
            ->notEmptyString('contact_number');

        $validator
            ->scalar('profile_picture_link')
            ->maxLength('profile_picture_link', 255)
            ->requirePresence('profile_picture_link', 'create')
            ->notEmptyString('profile_picture_link');

        $validator
            ->scalar('self_intro')
            ->requirePresence('self_intro', 'create')
            ->notEmptyString('self_intro');

        $validator
            ->scalar('official_document_link')
            ->maxLength('official_document_link', 255)
            ->requirePresence('official_document_link', 'create')
            ->notEmptyString('official_document_link');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

        $validator
            ->dateTime('date_created')
            ->notEmptyDateTime('date_created');

        $validator
            ->dateTime('date_modified')
            ->allowEmptyDateTime('date_modified');

        return $validator;
    }
}
