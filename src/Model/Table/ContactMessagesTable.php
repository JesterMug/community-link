<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactMessages Model
 *
 * @method \App\Model\Entity\ContactMessage newEmptyEntity()
 * @method \App\Model\Entity\ContactMessage newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ContactMessage> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactMessage get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ContactMessage findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ContactMessage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ContactMessage> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactMessage|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ContactMessage saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ContactMessage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContactMessage>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContactMessage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContactMessage> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContactMessage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContactMessage>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ContactMessage>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ContactMessage> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ContactMessagesTable extends Table
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

        $this->setTable('contact_messages');
        $this->setDisplayField('first_name');
        $this->setPrimaryKey('id');
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
            ->scalar('contact_number')
            ->maxLength('contact_number', 20)
            ->requirePresence('contact_number', 'create')
            ->notEmptyString('contact_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('message')
            ->requirePresence('message', 'create')
            ->notEmptyString('message');

        $validator
            ->boolean('replied_to')
            ->notEmptyString('replied_to');

        $validator
            ->dateTime('date_created')
            ->notEmptyDateTime('date_created');

        $validator
            ->dateTime('date_modified')
            ->allowEmptyDateTime('date_modified');

        return $validator;
    }
}
