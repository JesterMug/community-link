<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PartnerOrganisations Model
 *
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\HasMany $Events
 * @property \App\Model\Table\PartnerOrganisationEquipmentTable&\Cake\ORM\Association\HasMany $PartnerOrganisationEquipment
 * @property \App\Model\Table\PartnerOrganisationIndustryTable&\Cake\ORM\Association\HasMany $PartnerOrganisationIndustry
 *
 * @method \App\Model\Entity\PartnerOrganisation newEmptyEntity()
 * @method \App\Model\Entity\PartnerOrganisation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PartnerOrganisation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PartnerOrganisation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PartnerOrganisation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PartnerOrganisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PartnerOrganisation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PartnerOrganisation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PartnerOrganisation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerOrganisation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerOrganisation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerOrganisation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerOrganisation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerOrganisation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerOrganisation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PartnerOrganisation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PartnerOrganisation> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PartnerOrganisationsTable extends Table
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

        $this->setTable('partner_organisations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'partner_organisation_id',
        ]);
        $this->hasMany('PartnerOrganisationEquipment', [
            'foreignKey' => 'partner_organisation_id',
        ]);
        $this->hasMany('PartnerOrganisationIndustry', [
            'foreignKey' => 'partner_organisation_id',
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

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
            ->scalar('contact_person_phone')
            ->maxLength('contact_person_phone', 20)
            ->requirePresence('contact_person_phone', 'create')
            ->notEmptyString('contact_person_phone');

        $validator
            ->scalar('services')
            ->allowEmptyString('services');

        return $validator;
    }
}
