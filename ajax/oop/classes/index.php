<?php
include "allclass.php";

//$test = new languages();
//echo $test->name; //<-> her hasi "deyer" cagiranda
//echo "<br>";
//echo $test->mymethod();//<-> her hasi "funcksiya" cagiranda
//echo "<br>";
//echo languages::messaje;//<->her hansi "sabit" cagiranda
//echo "<br>"; echo "<hr>";

///=== public metodlarda deyerler bu formada verilir ve cagrilir =====

//$frut=new frut();
//$frut->name="kivi";//<->class -a deyver bu forada verilir
//$frut->color='yasil';
//echo $frut->name." "."meyvesi"." ".$frut->color." "."rengdedir";
//echo '<br>';
//echo frut::mesage;

///=== private  methodlarda ise deyerler bu formda verilir ve cagrilir ====

//$frut= new frut();
// $frut->setname("kivi");
// $frut->setcolor("yesil");
//echo $frut->message();

// === static metodlarda deyerler bele cagrilir  ===
//echo frut::$warnig;

/// ===abstract metohod====

//$car=new nissan('nissan');
//echo $car->info();


//class test{
////    public $name;
////    function __construct ($name){
////        $this->name=$name;
////    }
////
//////    function __toString()
//////    {
//////        return "my name is ".$this->name;
//////    }
////}
////$obj= new test('anar');
////echo $obj;

include "oop.php";
//$clas=new color2();
//echo $clas->reng;


//$stuobj=new student();
// $stuobj->name="tim";
// $stuobj->iid=10;
//$stuobj->a=100;
//$s=serialize($stuobj);
//echo $s;

class charger{
    public $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function charging(){
        echo 'asddad $name'.$this->name;
    }
}
class toycar{
    public $carname;
    public $color;
    public $chargerobj;
    public function __clon(){
        if (is_object($this->chargerobj)){
        $this->chargerobj=clone $this->chargerobj;}
    }
    public function __construct($name,$color,$charger)
    {
        $this->carname=$name;
        $this->color=$color;
        $this->chargerobj=$charger;
    }
}
$charger=new charger("6volt");
$charger=new toycar('masin','red',$charger);

    $objcar=clone $charger;
 $objcar->carname='bmw';
  $objcar->chargerobj->name='12volt';
print_r($charger);
echo '<br>';
print_r($objcar);