 <?php
//====bolun2-3====

// class Dress
//{
//    public $color = 'red';
//    private $fabric = 'line';
//    private $dersign = 'slim fit';
//    public function infoDress()
//    {   echo $this->dersign;
//        echo '<hr>';
//        echo $this->fabric;
//    }
//}
//$dress1 = new Dress();
//$dress1->infoDress();
////$dress2 = new Dress();
////$dress2->color = 'blue';
////$dress2->fabric = 'blue';
////$dress2->dersign = 'blue';
//var_dump($dress1);
//'<br>';
//'<hr>';
//print_r($dress2);


///====bolum4====

 //class Dress {
//    public $color='red';
//    private $color1='blue';
//    protected $color2='black';
//
//    public function color(){
//    }
//
//}
//$dress= new Dress();
//echo $dress ->color;'<hr>';
///////////////////////////////quiz -> ders 11
//class Calculator
//{
//
//    public function add($number1, $number2)
//    {
//        if (is_numeric($number2) && is_numeric($number1)) {
//            echo $number1 + $number2;
//            '<hr>';
//        } else {
//            echo "Both values should be numeric";
//            '<hr>';
//        }
//    }
//
//    public function subtract($number1, $number2)
//    {
//
//        if (is_numeric($number2) && is_numeric($number1)) {
//
//            echo $number2 - $number1;
//            '<hr>';
//        } else {
//            echo "Both values should be numeric";
//            '<hr>';
//        }
//    }
//
//    public function multiply($number1, $number2)
//    {
//        if (is_numeric($number2) && is_numeric($number1)) {
//            echo $number2 * $number1;
//            '<hr>';
//        } else {
//            echo "Both values should be numeric";
//            '<hr>';
//        }
//    }
//
//    public function divide($number1, $number2)
//    {
//        if ($number2 > 0) {
//            if (is_numeric($number2) && is_numeric($number1)) {
//                echo $number2 / $number1;
//                '<hr>';
//            } else {
//                echo "Both values should be numeric";
//                '<hr>';
//            }
//        }
//    }
//}
//$calc= new Calculator();
//$calc ->add(1,2);'<hr>';
//$calc ->subtract(1,2);'<hr>';
//$calc ->multiply(1,2);'<hr>';
//$calc ->divide(1,2);'<hr>';


//======bolum 5=====

//class Dress{
//    const SMALL='small'; // -> burdaki const  sabit deyerdi(global) harda cagirsan eyni  deyeri qaytaracaq
//    const MEDIUM='medium';
//    const LATGE='large';
//    public $color='red';
//    public $fabric='linen';
//}
//$dress=new Dress();
//echo $dress->size=Dress::LATGE;
//echo $dress->olcu=Dress::MEDIUM;
//echo $dress->a=Dress::LATGE;

 //=====bolum 6======

 // class Balace
// {
//     private $balance = 1000;
//
//     public function getBalance()
//     {
//         return $this->balance;
//     }
//
//     public function deposit($arqument)
//     {
//         $this->balance += $arqument;
//     }
//
//     public function withdraw($amount)
//     {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//         }
//     }
// }
//
// $bakiye = new Balace();
// echo $bakiye->withdraw(100);'<hr>';
// $bakiye->deposit(100);'<hr>';
// class CreditCard
// {
//
//     const CARDNUMBER = "1111222233334444";
//
//     private $totalBalance = 1000;
//     private $pinNumber = '1234';
//
//     public function getCardnumber()
//     {
//         return self::CARDNUMBER;
//     }
//
//     public function getTotalBalance()
//     {
//         return $this->totalBalance;
//     }
//
//     private function setTotalBalance($balance)
//     {
//         $this->totalBalance = $balance;
//     }
//
//    public function setPin($newPin)
//     {
//         if (preg_match("/^[1-9]\d{3}$/", $newPin)) {
//             $this->pinNumber = $newPin;
//         } else {
//             echo 'Pin numarası 4 haneli bir dizi olmalı ve ilk rakam sıfır olmamalıdır';
//         }
//     }
//
//     public function getPin()
//     {
//         return $this->pinNumber;
//     }
//
//     public function shooping($cardNumber, $pinNumber, $spendingMoney)
//     {
//         if ($cardNumber === $this->getCardnumber() && $pinNumber === $this->getPin()) {
//             if ($spendingMoney <= $this->getTotalBalance()) {
//                 $remBalance = $this->getTotalBalance() - $spendingMoney;
//                 $this->setTotalBalance($remBalance);
//                 echo "$spendingMoney pound harcadınız ve kalan bakiyeniz $remBalance.";
//             } else {
//                 echo "Hesabınızda yeterli bakiyeniz yok.";
//             }
//         } else {
//             echo "Kart numaranız veya şifreniz geçersiz.";
//         }
//     }
// }
//
// $cart = new CreditCard();
// $cart->setPin("4321");
//
// $cart->shooping('1111222233334444', '4321', 1000);
// $cart->getTotalBalance();

//===bolum12 =====quiz4

// class MyObject
// {
//     public function __construct()
//     {
//         echo "I have just been created.";
//     }
//
//     public function __destruct()
//     {
//         echo "I lived only for 5 seconds in the memory.";
//     }
//
// }
// echo date('h:i:s');
// $testObj=new MyObject();
// sleep(5);
// echo date('h:i:s');
// unset($testObj);

//===bolum13====quiz 5

// class SchoolSingleton
// {
//  static $schoolName;
//  static $schoolAdd;
//  static $singleInstance;
//
//  private function __construct($name, $add)
//  {
//   self::$schoolAdd = $add;
//   self::$schoolName = $name;
//  }
//
//  public static function getInstance($name, $add)
//  {
//   if (!(self::$singleInstance instanceof self)) {
//    self::$singleInstance = new self($name, $add);
//
//   }
//   return self::$singleInstance;
//  }
//  public static function getSchoolName(){
//   return self::$schoolName;
//  }
//  public static function getSchoolAdd()
//  {
//   return self::$schoolAdd;
//  }
//
//  private function __clone()
//  {
//  }
// }
// SchoolSingleton::getInstance("High School","No 2 abc city");
// echo SchoolSingleton::$schoolName;"<br>";
// echo SchoolSingleton::$schoolAdd;
//// SchoolSingleton::getInstance("fff","fff");
//// echo SchoolSingleton::getSchoolName();
//// echo SchoolSingleton::getSchoolAdd();
 //===bolum14===

// class tst{
//  public $name;
//  function __construct()
//  {
//   $this->name='l';
//  }
//  function __toString()
//  {
//  return $this->name;
//  }
//}
// $tet=new tst();
// echo $tet

 //try-catch
//$num1=70;
//$num2=5;
// try {
//  if ($num2==0){
//   throw new exception ("sifir ola bilmez");
//  } echo $num1/$num2 ;
// }catch (exception $e) {
//  echo $e->getMessage();
// } ;
// echo "<br>";
// $file="admin";
// try {
//  if ($file !== 'admin'){
//   throw new exception("if");
//  }
//  echo"file tapildi ";
//
// }catch (exception $e){
//  echo $e->getMessage();
// }
// class fileexception extends exception{
//
// }
// class dataexception extends exception{
//
// }
//$x=1;
// try {
//  if ($x==2){
//   throw new fileexception("fileexception");
//
//  }else{
//   throw new fileexception("exception");
//
//  }
// }catch (dataexception $e){
//  echo "mesaj 1".$e->getMessage();
// }
// catch (fileexception $e){
//  echo "mesaj2".$e->getMessage();
// }

function clas($class){
 $filename=$class."php";
 $file="classes/".$filename;
 if (!file_exists( $file)){
  return false;
 }else{
  include $file;
 }
}

 ?>
