<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator');
    public $helper = ['GetFinalGrades'];

    public function beforeFilter() {
        parent::beforeFilter();
        if ($this->Session->check('Auth.Student')) {
            return $this->redirect('/');
        }
        $this->Auth->allow('login', 'add');
    }

    public function add () {
        $this->autoRender = false;

        $user['User'] = [
            'username' => 'admin',
            'password' => 'admin'
        ];

        if ($this->User->save($user)) {
            echo "success";
            die();
        }
    }

    public function login () {
        $this->layout = false;
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if ($data['role'] == 1) {
                $user = $this->User->find('first', [
                    'conditions' => [
                        'User.password' => AuthComponent::password($data['password']),
                        'User.username' => $data['username']
                    ]
                ]);
            } else {
                $this->Faculty = ClassRegistry::init('Faculty');
                $user = $this->Faculty->find('first', [
                    'conditions' => [
                        'Faculty.password' => AuthComponent::password($data['password']),
                        'Faculty.username' => $data['username']
                    ]
                ]);
            }

            if (!empty($user)) {
                if (isset($user['User'])) {
                    $this->Session->write('Auth', $user);
                    return $this->redirect(['controller' => 'users', 'action' => 'index']);
                } else {
                    unset($user['Faculty']['password']);
                    AuthComponent::$sessionKey = 'Auth.Faculty';
                    if ($this->Auth->login($user['Faculty'])) {
                        $this->Session->write('Auth.User', $user['Faculty']);
                        return $this->redirect(['controller' => 'users', 'action' => 'index']);
                    }
                }
            } else {
                $this->Flash->error('Invalid username or password.');
            }
        }
    }
    /**
     * users logout
     */
    public function logout() {
        $this->autoRender = false;
        $this->Session->destroy();
        return $this->redirect(['controller' => 'users', 'action' => 'login']);
    }
    /**
     * Dashboard
     */
    public function index() {
        $this->layout = "admin";
        $this->Student = ClassRegistry::init('Student');
        $student_count = $this->Student->find('count', [
            'conditions' => [
                'Student.deleted_date' => NULL
            ]
        ]);
        $this->Faculty = ClassRegistry::init('Faculty');
        $faculty_count = $this->Faculty->find('count', [
            'conditions' => [
                'Faculty.deleted_date' => NULL
            ]
        ]);

        // $this->Student->bindModel(
        //     array('hasMany' => array(
        //             'Grade' => array(
        //                 'className' => 'Grade'
        //             )
        //         )
        //     )
        // );
        // $conditions[] = 'Grade IS NOT NULL';
        // $conditions['Student.deleted_date'] = NULL;

        // $students = $this->Student->find('all', [
        //     'conditions' => $conditions
        // ]);
        $this->Grade = ClassRegistry::init('Grade');
        $grades = $this->Grade->find('all');
        $mapeh = $this->__get_percentage(1, $grades);
        $science = $this->__get_percentage(2, $grades);
        $filipino = $this->__get_percentage(3, $grades);
        $english = $this->__get_percentage(4, $grades);
        $math = $this->__get_percentage(5, $grades);
        $this->set(compact(
            'student_count',
            'faculty_count',
            'mapeh',
            'science',
            'filipino',
            'english',
            'math'
        ));
    }

    private function __get_percentage($subject_id, $grades) {
        $data = 0;
        $count = 0;
        foreach($grades as $key => $grade) {
            if ($subject_id == $grade['Grade']['subject_id']) {
                $count++;
                $data+=$grade['Grade']['final'];
            }
        }

        $data = $data != 0 ? $data/$count : 0;
        return $data;
    }

    public function add_grades() {
        $this->layout = "admin";
        $get_data = $this->request->query;
        $conditions = [];
        if (!empty($get_data['student_id'])) {
            $conditions['Student.student_id'] = $get_data['student_id'];
        }

        if (!empty($get_data['grade'])) {
            $conditions['Student.grade'] = $get_data['grade'];
        }
        $conditions['Student.deleted_date'] = NULL;
        if (!empty($this->request->query)) {
            $this->Student = ClassRegistry::init('Student');
            $this->Grade = ClassRegistry::init('Grade');
            $students = $this->Student->find('first', [
                'conditions' => $conditions
            ]);

            $student_grade = $this->Grade->find('all', [
                'conditions' => [
                    'Grade.student_id' => $students['Student']['id'],
                    'Grade.grade_id' => $students['Student']['grade']
                ]
            ]);
            $this->set(compact('student_grade'));
        }

        if ($this->request->is('post')) {
            $this->Grade->deleteAll([
                'Grade.student_id' => $students['Student']['id'],
                'Grade.grade_id' => $students['Student']['grade']
            ]);
            $data = $this->request->data;
            $array_data = [];
            foreach($data['subject_id'] as $key => $value) {
                $array_data[]['Grade'] = [
                    'student_id' => $students['Student']['id'],
                    'subject_id' => $value,
                    'grade_id'   => $students['Student']['grade'],
                    'first'      => $data['first'][$value],
                    'second'     => $data['second'][$value],
                    'third'      => $data['third'][$value],
                    'fourth'     => $data['fourth'][$value],
                    'final'      => $this->__get_final_grade([
                                    $data['first'][$value],
                                    $data['second'][$value],
                                    $data['third'][$value],
                                    $data['fourth'][$value]
                                ])
                ];
            }

            if ($this->Grade->saveMany($array_data)) {
                $this->Flash->success('Successfully added grade.');
                $this->Student = ClassRegistry::init('Student');
                $this->Student->id = $students['Student']['id'];
                $this->Student->saveField('suggestion', $data['suggestion']);
                return $this->redirect(['controller' => 'users', 'action' => 'add_grades']);
            } else {
                $this->Flash->error('Has been failed to saved.');
            }

        }

        $grades = Configure::read('GRADE');
        $subjects = Configure::read('SUBJECTS');
        $this->set(compact('grades', 'subjects', 'students'));
    }

    private function __get_final_grade($grades) {
        $total = array_sum($grades);
        $total = $total / 4;
        return $total;
    }
    public function view_grades() {
        $this->layout = 'admin';
        $this->Student = ClassRegistry::init('Student');

        $this->Student->bindModel(
            array('hasMany' => array(
                    'Grade' => array(
                        'className' => 'Grade'
                    )
                )
            )
        );
        $conditions = [];
        if (!empty($this->request->query['student_id'])) {
            $conditions['Student.student_id'] = $this->request->query['student_id'];
        }
        if (!empty($this->request->query['grade_id'])) {
            $conditions['Student.grade'] = $this->request->query['grade_id'];
        }
        $conditions[] = 'Grade IS NOT NULL';
        $conditions['Student.deleted_date'] = NULL;

        $students = $this->Student->find('all', [
            'conditions' => $conditions
        ]);
        $grades = Configure::read('GRADE');
        $subjects = Configure::read('SUBJECTS');
        $this->set(compact('students', 'grades', 'subjects'));
    }
}
