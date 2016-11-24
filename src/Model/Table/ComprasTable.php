<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ComprasTable extends Table
{


      public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('compras');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Productos', [
        'foreignKey' => 'id_producto',
        'joinType' => 'LEFT'
        ]);
        $this->belongsTo('Users', [
        'foreignKey' => 'id_user',
        'joinType' => 'LEFT'
        ]);
    }
 
    public function validationDefault(Validator $validator)
    {
  $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('cantidad')
            ->requirePresence('cantidad', 'create')
            ->notEmpty('cantidad');

        $validator
            ->integer('precioCobrado')
            ->requirePresence('precioCobrado', 'create')
            ->notEmpty('precioCobrado');

        $validator
            ->integer('id_producto')
            ->requirePresence('id_producto', 'create')
            ->notEmpty('id_producto');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        return $validator;
    }
}
