<?php
/**
 * Created by PhpStorm.
 * User: Paladin
 * Date: 10.07.2016
 * Time: 19:13
 */

Class System
{
    protected static $user;
    
    public function __get($field)
    {
        if ($field === 'user')
        {
            if (self::$user === NULL)
            {
                
                self::$user = new User();
                self::$user->auth_flow();

            }
            
            return self::$user;
        }
    }
}