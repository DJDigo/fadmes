<?php 
class AppSchema extends CakeSchema {

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {
    }

    public $students = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'firstname' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Firstname'
        ],
        'middlename' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Middlename'
        ],
        'lastname' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Lastname'
        ],
        'student_id' => [
            'type'     => 'biginteger', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'password' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
        ],
        'address' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Address'
        ],
        'contact' => [
            'type'     => 'biginteger', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'birthday' => [
            'type'    => 'string', 
            'null'    => false
        ],
        'gender' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'guardian' => [
            'type'    => 'string', 
            'null'    => false
        ],
        'grade' => [
            'type'    => 'integer', 
            'null'    => false
        ],
        'status' => [
            'type'    => 'integer', 
            'null'    => false
        ],
        'date_enrolled' => [
            'type'    => 'string', 
            'null'    => false
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];

    public $faculties = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'firstname' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Firstname'
        ],
        'middlename' => [
            'type'    => 'string', 
            'null'    => true, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Middlename'
        ],
        'lastname' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Lastname'
        ],
        'email' => [
            'type'    => 'string', 
            'null'    => true, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' => 'Email'
        ],
        'username' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
        ],
        'password' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
        ],
        'birthday' => [
            'type'    => 'string', 
            'null'    => false
        ],
        'date_hired' => [
            'type'    => 'string', 
            'null'    => false
        ],
        'address' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
            'comment' =>'Address'
        ],
        'gender' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'contact' => [
            'type'     => 'biginteger', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];

    public $faculty_subjects = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'faculty_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'subject_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];

    public $faculty_students = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'student_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'faculty_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];

    public $users = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'username' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
        ],
        'password' => [
            'type'    => 'string', 
            'null'    => false, 
            'default' => null, 
            'collate' => 'utf8_general_ci', 
            'charset' => 'utf8', 
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];

    public $grades = [
        'id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => null, 
            'unsigned' => false, 
            'key'      => 'primary'
        ],
        'deleted_date' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null
        ],
        'student_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'unsigned' => false
        ],
        'first' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'second' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'third' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'fourth' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'final' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'grade_id' => [
            'type'     => 'integer', 
            'null'     => false, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'subject_id' => [
            'type'     => 'integer', 
            'null'     => true, 
            'default'  => 0, 
            'unsigned' => false
        ],
        'created' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Created Date'
        ],
        'modified' => [
            'type'    => 'datetime', 
            'null'    => true, 
            'default' => null,
            'comment' =>'Modified Date'
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
    ];
}
