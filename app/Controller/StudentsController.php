<?php
App::uses('AppController', 'Controller');
/**
 * Students Controller
 *
 * @property Student $Student
 * @property PaginatorComponent $Paginator
 */
class StudentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator');

    /**
     * Student lists
     */
    public function index() {
        $this->layout = "admin";
        $students = $this->Student->find('all', [
            'conditions' => [
                'Student.deleted_date' => NULL
            ]
        ]);

        $this->set(compact('students'));
        $this->set('grade', Configure::read('GRADE'));
        $this->set('status', Configure::read('STATUS'));
    }
    /**
     * Create students
     */
    public function add() {
        $this->layout = "admin";
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Student->set($data);
            if ($this->Student->validates()) {
                if ($this->Student->save($data)) {
                    $this->Flash->success('Students has been successfully added.');
                    return $this->redirect(['controller' => 'students', 'action' => 'index']);
                }
            } else {
                $this->Flash->error('Students has been failed to saved.');
            }
        }
    }
    /**
     * Delete students
     */
    public function delete($id) {
        $check = $this->Student->find('first', [
            'conditions' => [
                'Student.id' => $id,
                'Student.deleted_date' => NULL
            ]
        ]);
        if (empty($check)) {
            throw new NotFoundException(__('Invalid student id'));
        }
        $this->Student->id = $id;
        if ($this->Student->saveField('deleted_date', date('Y-m-d'))) {
            $this->Flash->success('Student has been successfully deleted');
            return $this->redirect(['controllers' => 'students', 'action' => 'index']);
        }
    }
    /**
     * Update students
     */
    public function edit($id) {
        $this->layout = "admin";
        $student = $this->Student->find('first', [
            'conditions' => [
                'Student.id' => $id,
                'Student.deleted_date' => NULL
            ]
        ]);

        if (empty($student)) {
            throw new NotFoundException(__('Invalid student id'));
        }
        if (empty($this->request->data)) {
            $this->request->data = $student['Student'];
        }
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Student->set($data);
            if ($this->Student->validates()) {
                $this->Student->id = $id;
                if ($this->Student->save($data)) {
                    $this->Flash->success('Student has been successfully saved.');
                    return $this->redirect(['controller' => 'students', 'action' => 'edit/'.$id]);
                } 
            } else {
                $this->Flash->error('Student has been failed to saved.');
            }
        }
        $this->set(compact('student'));
    }
    /**
     * Student login
     */
    public function login() {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $user = $this->Student->find('first', [
                'conditions' => [
                    'Student.password' => AuthComponent::password($data['password']),
                    'Student.student_id' => $data['student_id']
                ]
            ]);
            unset($user['Student']['password']);
            if (!empty($user)) {
                if ($this->Auth->login($user['Student'])) {
                    AuthComponent::$sessionKey = 'Auth.Student';
                }
                // $this->Session->write('Auth', $user);
            } else {
                $this->Flash->error('Invalid Student ID or Password.');
            }
        }
    }
}
