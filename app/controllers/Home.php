<?php

/**
 *
 */
class Home extends Controller
{

  function __construct($controller , $action)
  {
    parent::__construct($controller , $action);

  }

  public function indexAction()
  {
      $db = DB::getInstance();
      
      
      $cols = $db->get_columns("contacts");
      
      
      $this->view->render('home/index');
  }
}
