<?php
App::uses('AppController', 'Controller');
/**
 * Faculties Controller
 *
 * @property Faculty $Faculty
 * @property PaginatorComponent $Paginator
 */
class FacultiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->layout = 'admin';
        if (!$this->Session->check('Auth.User')) {
            throw new NotFoundException(__('You cannot access this page'));
        }
        //get all teachers
        $faculties = $this->Faculty->find('all', [
            'conditions' => [
                'Faculty.deleted_date' => NULL
            ]
        ]);

        $this->set(compact('faculties'));
    }

    public function add() {
        $this->layout = 'admin';
        if (!$this->Session->check('Auth.User')) {
            throw new NotFoundException(__('You cannot access this page'));
        }
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Faculty->set($data);
            if ($this->Faculty->validates()) {
                if ($this->Faculty->save($data)) {
                    $faculty_id = $this->Faculty->getLastInsertID();
                    if (!empty($data['subject'])) {
                        $subject_data = [];
                        foreach ($data['subject'] as $key => $value) {
                            $subject_data[]['FacultySubject'] = [
                                'subject_id' => $value,
                                'faculty_id' => $faculty_id
                            ];
                        }
                        $this->FacultySubject = ClassRegistry::init('FacultySubject');
                        $this->FacultySubject->saveMany($subject_data);
                    }
                    $this->Flash->success('Faculty teacher has been successfully saved.');
                    return $this->redirect('/faculties/add');
                }
            } else {
                $this->Flash->error('Faculty teacher has been failed to saved.');
            }
        }

        $this->set('subjects', Configure::read('SUBJECTS'));
    }

    public function delete($id) {
        $check = $this->Faculty->find('first' , [
            'conditions' => [
                'Faculty.id' => $id,
                'Faculty.deleted_date' => NULL
            ]
        ]);
        if (empty($check)) {
            throw new NotFoundException(__('Invalid faculty id'));
        }
        $this->Faculty->id = $id;
        if ($this->Faculty->saveField('deleted_date', date('Y-m-d'))) {
            $this->Flash->success('Faculty teacher has been successfully deleted.');
            return $this->redirect(['controller' => 'faculties', 'action' => 'index']);
        }
    }

    public function edit($id) {
        $this->layout = 'admin';
        $this->FacultySubject = ClassRegistry::init('FacultySubject');
        $teacher = $this->Faculty->find('first', [
            'conditions' => [
                'Faculty.id' => $id,
                'Faculty.deleted_date' => NULL
            ]
        ]);
        if (empty($teacher)) {
            throw new NotFoundException(__('Invalid faculty id'));
        }
        if ($this->request->is('post'))  {
            $data = $this->request->data;
            $this->Faculty->set($data);
            $this->Faculty->id = $id;
            if ($this->Faculty->save($data)) {
                if (!empty($data['subject'])) {
                    $this->FacultySubject->deleteAll(array('FacultySubject.faculty_id' => $id), false);
                    $subject_data = [];
                    foreach ($data['subject'] as $key => $value) {
                        $subject_data[]['FacultySubject'] = [
                            'subject_id' => $value,
                            'faculty_id' => $id
                        ];
                    }
                    if ($this->FacultySubject->saveMany($subject_data)) {
                        $this->Flash->success('Faculty teacher has been successfully updated.');
                        return $this->redirect(['controller' => 'faculties', 'action' => 'edit/'.$id]);
                    }
                }
            }

        }

        if (!$this->request->data) {
            $this->request->data = $teacher['Faculty'];
        }
        $this->set('subjects', Configure::read('SUBJECTS'));
        $faculty_subject = $this->FacultySubject->find('list', [
            'conditions' => [
                'FacultySubject.faculty_id' => $id,
                'FacultySubject.deleted_date' => NULL
            ],
            'fields' => ['subject_id', 'id']
        ]);
        $this->set(compact('faculty_subject', 'teacher'));
    }
}
