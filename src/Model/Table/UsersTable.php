<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('email', 'A email is required')
            ->notEmpty('password', 'A password is required')
            ->add('password','minLength',[
                'rule'=>['minLength',6],
                'message'=>'You must enter a password more than 6 characters'
            ]);
    }

}