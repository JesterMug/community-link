<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VolunteerAvailability Model
 *
 * @property \App\Model\Table\VolunteersTable&\Cake\ORM\Association\BelongsTo $Volunteers
 *
 * @method \App\Model\Entity\VolunteerAvailability newEmptyEntity()
 * @method \App\Model\Entity\VolunteerAvailability newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\VolunteerAvailability> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerAvailability get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\VolunteerAvailability findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\VolunteerAvailability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\VolunteerAvailability> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VolunteerAvailability|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\VolunteerAvailability saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\VolunteerAvailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VolunteerAvailability>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VolunteerAvailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VolunteerAvailability> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VolunteerAvailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VolunteerAvailability>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\VolunteerAvailability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\VolunteerAvailability> deleteManyOrFail(iterable $entities, array $options = [])
 */
class VolunteerAvailabilityTable extends Table
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

        $this->setTable('volunteer_availability');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Volunteers', [
            'foreignKey' => 'volunteer_id',
            'joinType' => 'INNER',
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
            ->dateTime('start_datetime')
            ->requirePresence('start_datetime', 'create')
            ->notEmptyDateTime('start_datetime');

        $validator
            ->dateTime('end_datetime')
            ->requirePresence('end_datetime', 'create')
            ->notEmptyDateTime('end_datetime');

        $validator
            ->integer('volunteer_id')
            ->notEmptyString('volunteer_id');

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
        $rules->add($rules->existsIn(['volunteer_id'], 'Volunteers'), ['errorField' => 'volunteer_id']);

        return $rules;
    }
}
