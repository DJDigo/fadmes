<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = [
        'DebugKit.Toolbar',
        'Flash',
        // 'Auth' => [
        //     'loginRedirect'  => ['controller' => 'users', 'action' => 'index'],
        //     'logoutRedirect' => ['controller' => 'users', 'action' => 'login'],
        //     'authError'      => 'You must be logged in to view this page.',
        //     'loginError'     => 'Invalid Username or Password entered, please try again.',
        //     'authenticate'   => [
        //         'Form' => [
        //             'passwordHasher' => 'Blowfish',
        //             'fields' => [
        //                 'username' => 'username',
        //                 'password' => 'password'
        //             ]
        //         ]
        //     ]
        // ],
        'Session'
    ];

    public function beforeFilter() {
        // $this->Auth->allow('add_files', 'add', 'edit');
        if (empty($this->params['controller'])) {
            return $this->redirect(['users/']);
        }
        $this->set('url', $this->current_url());
    }

    public function current_url() {
        $parsed_url = parse_url($_SERVER['PHP_SELF']);
        $path_array = explode('/', $parsed_url['path']);
        $url = "/".$path_array[1]."/";
        return $url;
    }
}
