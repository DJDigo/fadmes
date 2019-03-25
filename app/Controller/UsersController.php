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

    public function beforeFilter() {
        parent::beforeFilter();
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
                $this->Session->write('Auth', $user);
                return $this->redirect(['controller' => 'users', 'action' => 'index']);
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
    }

}
