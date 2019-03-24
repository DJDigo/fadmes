<?php
App::uses('AppModel', 'Model');
/**
 * Faculty Model
 *
 */
class Faculty extends AppModel {
    public $validate = [
        'firstname' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Firstname is required'
            ]
        ],
        'lastname' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Lastname is required'
            ]
        ],
        'gender' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Gender is required'
            ]
        ],
        'birthday' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Birthday is required'
            ]
        ],
        'address' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Address is required'
            ]
        ],
        'email' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Email is required'
            ]
        ],
        'contact' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Contact number is required'
            ]
        ],
        'date_hired' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Date hired is required'
            ]
        ],
        'username' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Username is required'
            ]
        ],
        'password' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Password is required'
            ]
        ]
    ];
    /**
     * Hash password before saved.
     */
    public function beforeSave($options = []) {
        if (isset($this->data['Faculty']['password'])) {
            $this->data['Faculty']['password'] = AuthComponent::password(
                $this->data['Faculty']['password']
            );
        }
        
        return true;
    }
}
