<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
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
	
	public $helpers       = array('Html','Form');
	public $components    = array('Session','Cookie');
	public $layout        = 'home';
	
	public function _errors_messages($obj = null){
	   if (!$obj):
	   	 $this->set("invalidFields",array());
	   else:	
         $this->set("invalidFields",$obj->validationErrors);
	   endif;
	}
}
