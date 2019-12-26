<?php
namespace SimpleParser\Cmsp\Controller;


/***
 *
 * This file is part of the "cmSimpleParser" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * UserController
 */
class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
	    $users = $this->userRepository->findAll();
	    //blabb
        $this->view->assign('users', $users);
    }

    public function searchAction()
    {
        //$users = $this->userRepository->findAll();
	    $this->view->assign('users', $users);
	    //$this->view->assign('search',{});
	    //blubb
	    //$this->redirect('search');
	    $this->view->render();

    }

    public function tmpAction() 
    {
	    $this->view->assign('users',$users);
	    $this->redirectToUri('www.google.de');
    }

    public function indexAction()
    {

    }
}
