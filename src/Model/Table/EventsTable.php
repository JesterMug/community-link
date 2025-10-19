<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\PartnerOrganisationsTable&\Cake\ORM\Association\BelongsTo $PartnerOrganisations
 * @property \App\Model\Table\EventEquipmentTable&\Cake\ORM\Association\HasMany $EventEquipment
 * @property \App\Model\Table\EventSkillTable&\Cake\ORM\Association\HasMany $EventSkill
 * @property \App\Model\Table\VolunteerEventTable&\Cake\ORM\Association\HasMany $VolunteerEvent
 *
 * @method \App\Model\Entity\Event newEmptyEntity()
 * @method \App\Model\Entity\Event newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Event> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Event findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Event> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Event>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Event>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Event>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Event> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Event>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Event>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Event>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Event> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('location');
        $this->setPrimaryKey('id');

        $this->belongsTo('PartnerOrganisations', [
            'foreignKey' => 'partner_organisation_id',
        ]);
        $this->hasMany('EventEquipment', [
            'foreignKey' => 'event_id',
        ]);
        $this->hasMany('EventSkill', [
            'foreignKey' => 'event_id',
        ]);
        $this->hasMany('VolunteerEvent', [
            'foreignKey' => 'event_id',
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
            ->integer('partner_organisation_id')
            ->allowEmptyString('partner_organisation_id');

        $validator
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->notEmptyString('location');

        $validator
            ->scalar('host_organisation')
            ->maxLength('host_organisation', 255)
            ->requirePresence('host_organisation', 'create')
            ->notEmptyString('host_organisation');

        $validator
            ->dateTime('date')
            ->requirePresence('date', 'create')
            ->notEmptyDateTime('date');

        $validator
            ->integer('participants')
            ->allowEmptyString('participants');

        $validator
            ->scalar('contact_person_full_name')
            ->maxLength('contact_person_full_name', 127)
            ->requirePresence('contact_person_full_name', 'create')
            ->notEmptyString('contact_person_full_name');

        $validator
            ->scalar('contact_person_email')
            ->maxLength('contact_person_email', 255)
            ->requirePresence('contact_person_email', 'create')
            ->notEmptyString('contact_person_email');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->integer('required_crews')
            ->allowEmptyString('required_crews');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['partner_organisation_id'], 'PartnerOrganisations'), ['errorField' => 'partner_organisation_id']);

        return $rules;
    }
}
