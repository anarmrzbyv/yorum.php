<?php
include_once 'crud.php';
include_once 'session.php';
class usercontroller{
    private $crud;
public function __construct(){
    $this->crud=new crud();
}
    public function  login($username,$password){
    $sql="SELECT * FROM users WHERE username='".$username."'and password='".md5($password)."'";
    $user=$this->crud->read($sql);

    }
}