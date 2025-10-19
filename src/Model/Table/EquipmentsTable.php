<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipments Model
 *
 * @property \App\Model\Table\EventEquipmentTable&\Cake\ORM\Association\HasMany $EventEquipment
 * @property \App\Model\Table\PartnerOrganisationEquipmentTable&\Cake\ORM\Association\HasMany $PartnerOrganisationEquipment
 *
 * @method \App\Model\Entity\Equipment newEmptyEntity()
 * @method \App\Model\Entity\Equipment newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipment> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipment get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Equipment findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Equipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Equipment> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipment|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Equipment saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Equipment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipment>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipment> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipment>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Equipment>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Equipment> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EquipmentsTable extends Table
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

        $this->setTable('equipments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('EventEquipment', [
            'foreignKey' => 'equipment_id',
        ]);
        $this->hasMany('PartnerOrganisationEquipment', [
            'foreignKey' => 'equipment_id',
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
            ->maxLength('name', 127)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
