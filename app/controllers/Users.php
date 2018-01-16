<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Users | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */

class Users extends Controller
{
    public function __construct($controller , $action)
    {
        parent::__construct($controller ,$action);
        $this->view->setLayout('default');
    }

    public function indexAction()
    {
        $this->view->render("users/index");
    }

    public function loginAction()
    {
        $this->view->render("users/login");
    }
}
