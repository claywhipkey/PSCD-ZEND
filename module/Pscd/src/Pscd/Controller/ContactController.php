<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Pscd for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Pscd\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController {
	protected $contactTable;
	public function indexAction() {
		return new ViewModel(array(
            'contacts' => $this->getContactTable()->fetchAll(),
        ));
	}
	public function getContactTable() {
		if (! $this->contactTable) {
			$sm = $this->getServiceLocator ();
			$this->contactTable = $sm->get ( 'Pscd\Model\ContactTable' );
		}
		return $this->contactTable;
	}
}
