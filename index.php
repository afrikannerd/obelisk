<?php
/**
 * Description of index
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */

/*
 * Define Directory Separator
 */
define('DS','/');
/*
 * Define ROOT PATH
 */
define('ROOT',dirname(__FILE__));

/*
 * Load site configuration functions and helper functions
 */

require_once ROOT.DS.'config'.DS.'config.php';
require_once ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.'functions.php';

/*
 * Autoload classes on demand
 */

function LoadFile($file)
{
    if (file_exists(ROOT.DS.'core'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'core'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'config'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'config'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'lib'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'app'.DS.'lib'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'controllers'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'app'.DS.'controllers'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'models'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'app'.DS.'models'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'views'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'app'.DS.'views'.DS.$file.'.php';
    }
    elseif (file_exists(ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.$file.'.php'))
    {
        require_once ROOT.DS.'app'.DS.'lib'.DS.'helpers'.DS.$file.'.php';
    }
}

spl_autoload_register('LoadFile');

/*
 * Start the session
 */
session_start;

/*
 * Explode url to get access to url parts
 * @var $parts
 * @type array
 */
$parts  = isset($_SERVER['PATH_INFO'])  ? explode('/', ltrim($_SERVER['PATH_INFO'],'/'))    :   []  ;
/**
 * Bootstrap the application
 */

Router::route($parts);