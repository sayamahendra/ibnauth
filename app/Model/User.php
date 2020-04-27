<?php
App::uses('AppModel','Model');
App::uses('BlowfishPasswordHasher','Controller/Component/Auth');
class User extends AppModel{
    public function beforeSave($option = array()){
        if(isset($this->data[$this->alias]['password'])){
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
                )
            ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A Password is required'
                )
            ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin','author')),
                'message' => 'Please enter a valid role.',
                'allowEmpty' => false
            )
        )   
    );
}
?>