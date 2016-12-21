<?php

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;

class Users extends Model
{
    public function validation()
    {
        $validator = new Validation();
         
        $validator->add('email', new EmailValidator(array(
            'field' => 'email'
        )));
     
        $validator->add('email', new UniquenessValidator(array(
            'model' => $this,
            'message' => 'Sorry, The email was registered by another user'
        )));
      
        $validator->add('username', new UniquenessValidator(array(
            'model' => $this,
            'message' => 'Sorry, That username is already taken'
        )));
       
       return $this->validate($validator); 
        
    }
}
