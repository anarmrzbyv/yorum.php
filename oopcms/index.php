<?php
include_once "dbconfig.php";
include_once 'crud.php';
include_once "paginator.php";
include_once "validator.php";
include_once 'usercontroller.php';
//$data_array=
//        [
//            'mv_year_released'=>'1999-03-01',
//            'mv_title'=>'rush hour 1'
//
//        ];
//$crud= new crud();
//===db-ye yuklemek ucun===
//$crud->create($data_array,'movies');

//=== db- dekileri dartmaq ucun ===
//$results=$crud-> read('SELECT * FROM movies ');

//=== db_dekileri update elemek ucun===
//$crud->update("UPDATE movies SET mv_title='Titanic12'WHERE mv_id=1");

//==db _dekileri silmek ucun
//$crud->delete("DELETE FROM movies WHERE mv_id=3");



//
//$page=new paginator(200,15);
//echo $page->get_pagination_links();
//echo $page->get_offset_and_limi();

//$data=[
//    'name' =>'jonh',
//    'surname'=>'doe',
//    'aga'=>30,
//    'data'=>'2023-05-18'
//
//];
//$validatin_rules=[
//    'name' =>'ali',
//    'surname'=>'vali',
//    'aga'=>'number',
//    'data'=>'2023-05-18'
//];
//$validator = new validator($data,$validatin_rules);
//$validator->validate();

//$crud=new crud();
//$crud->create(['name'=>'Admin user','username'=>'admin','password'=>md5('admin123')],'users');


$usercontroller=new usercontroller();
$usercontroller->login('admin123','admin123');
var_dump($usercontroller);
