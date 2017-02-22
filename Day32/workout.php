<?php

$user_id = 4;

//2
session_start();

//3
var_dump($_SESSION);

//4
// $_SESSION['user_id'] = user_id;

//6
$username = 'Bob';

//7
$user = [
    'user_id' => $user_id,
    'username' => $username
];

//8
class Auth {
    protected static $users = [];
    public static function addUser($user)
    {
       static::$users[] = $user;
    }
    //10
    public static function getUsers(){
        return static::$users;
    }

    public static function getCurrentUserId(){
        if(!empty($_SESSION['user_id'])){
            return $_SESSION['user_id'];
        }else {
            return null;
        }
    }

    public static function getCurrentUser(){
        $user_id = static::getCurrentUserId();

        foreach(static::$users as $user){
            if($user_id == $user['user_id']){
                return $user;
            } return null;
        }

    }
}


Auth::addUser(array('user_id' => 1, 'username' => 'Kevin'));
Auth::addUser(array('user_id' => 2, 'username' => 'Stuart'));
Auth::addUser(array('user_id' => 3, 'username' => 'Bob'));
Auth::addUser(array($user));

var_dump(Auth::getUsers());


$current_user = Auth::getCurrentUserId();
var_dump($current_user);




