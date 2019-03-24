<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 */
class Student extends AppModel {

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
        'guardian' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Guardian is required'
            ]
        ],
        'date_enrolled' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Date enrolled is required'
            ]
        ],
        'contact' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Contact number is required'
            ]
        ],
        'date_enrolled' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Date enrolled is required'
            ]
        ],
        'student_id' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Student ID is required'
            ],
            'unique_student_id' => [
                'rule' => ['unique_student_id'],
                'message' => 'Student id must be unique'
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
        if (isset($this->data['Student']['password'])) {
            $this->data['Student']['password'] = AuthComponent::password(
                $this->data['Student']['password']
            );
        }
        
        return true;
    }

    public function unique_student_id() {
        $data = $this->data;
        $check = $this->find('first', [
            'conditions' => [
                'Student.student_id' => $data['Student']['student_id'],
                'Student.deleted_date' => NULL
            ]
        ]);
        if (!empty($check)) {
            if (isset($data['Student']['id']) == $check['Student']['id']) {
                return true;
            }
            return false;
        } 
        return true;
    }
}
