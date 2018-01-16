<?php

/**
 *
 */
class View
{

  protected $_head,$_body,$_siteTitle = SITE_TITLE,$_outputBuffer,$_layout = DEFAULT_LAYOUT;

  function __construct()
  {

  }

  public function render($viewName)
  {
    $viewArray = explode('/' , $viewName);
    $viewString = implode(DS,$viewArray);

    if (file_exists(ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php'))
    {
        include_once ROOT.DS.'app'.DS.'views'.DS.$viewString.'.php';
        include_once ROOT.DS.'app'.DS.'views'.DS.'layouts'.DS.$this->_layout. '.php';
    }else
    {
        die("View {$viewName}.php doesnt exist");

    }
  }

  public function content($type)
  {
      if($type == "head")
      {
          return $this->_head;
      } 
      elseif ($type == "body")
      {
          return $this->_body;
      }
      else
      {
          return false;
      }
      /*
      switch ($type) {
        case 'head':
          return $this->_head;
          break;
        case 'body':
          return $this->_body;
        default:
          return false;
          break;
      }
       * 
       */
  }

  public function start($type)
  {
    $this->_outputBuffer = $type;
    ob_start();
  }
  public function end()
  {
      /*
    switch ($this->_outputBuffer) {
      case 'head':
        $this->_head = ob_get_clean();
        break;
      case 'body':
        $this->_body = ob_get_clean();
      default:
        die("you must first run the start method");
        break;
    }
       * 
       */
      if($this->_outputBuffer == "head")
      {
          $this->_head = ob_get_clean();
      } 
      elseif ($this->_outputBuffer == "body")
      {
          $this->_body = ob_get_clean();
      }
      else
      {
          die("you must first run the start method");
      }
  }

  public function siteTitle()
  {
      return $this->_siteTitle;
  }
  
  public function setSiteTitle($title)
  {
      $this->_siteTitle = $title;
  }

  public function setLayout($path)
  {
    $this->_layout = $path;
  }

}
