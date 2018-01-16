<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 *
 * @author afrikannerd <afrikannerd@gmail.com>
 */
class Router
{
    private static $controller;
    private static $action;
    private static $params;
    public static function route($parts)
    {
        //Controller
        self::$controller   =   (isset($parts[0])  &&  $parts[0]   !=  "")  ? ucwords($parts[0]) :  DEFAULT_CONTROLLER ;
        if(!class_exists(self::$controller )) self::$controller   =   DEFAULT_CONTROLLER;
        $controller_name    =   self::$controller;
        array_shift($parts);

        //Action
        self::$action = (isset($parts[0])   &&  $parts[0]   !=  "")  ? $parts[0].'Action' :  'indexAction' ;
        array_shift($parts);

        #Params

        self::$params = $parts;

        $dispatch = new self::$controller($controller_name,$action);

        if (method_exists(self::$controller,self::$action)) {
            call_user_func_array([$dispatch , self::$action] , self::$params);
        }else{
          #throw new Exception("That method doesnt exist in controller{$controller_name}");
          die("That method doesnt exist in controller {$controller_name}");
        }
    }
}
