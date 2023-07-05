<?php
//==== FEHMI UYAZ OOP
//$this-> -> ile classin icinde deyer cagiranda isdifade olunur
// $name -> bu deyiskendir
//const->sabit demekdir
//self:: -> class in icindeki  sabit(static) deyere , const deyerine   ve basqa bir functiondaki deyere  erise bilik icin isdifade olunur
//parent ->miras alinan classin functionlarini isdifade etmek ucun yazilir
// static metodlari-> cagirmag ucun " class-in adi+ :: " formasinda yazilir
// function mymetod ->(function) bu metod-dur
// public -(hamiya aciq demekdi)deyiskenlerine ($ ile yazilan deyerler)ve function( metod)-una isdenilen yerden yere vere bileriy
//private -(qorunagli demekdi) ancaq 'classin' icinde deyer verb cagira bilersen
//protected -(cox qorunagli )onada ancag classin icinnden ve classin toremesi olan classlardan deyer verib cagira bilersen
//final -> yazilan class-i ve function-u miras almaga qoymur === final== yazilan function ile eyni adda function yazmag olmaz
// abstract -> class ve ya deyer abstract  ola biler class da abstract varsa onun toremesinde hemin abstract deyer isledilmesi mecburuidi
// trait -> 1 den cox class-i eyni anda extens etmek (toremesin almaq )  ucun isdifade olunur  // trait in icinde "const (sabit) " isdifade edile bilmez
//==== FEHMI UYAZ OOP 113 cu ders===
//__construct -> class cagiran kimi ise dusur
//__destruct -> class isin bitiren kimi ise dusur
//__call -> var olmyan bir metodu cagirdiqda xeta yerine ekrane biz isdeyen mesaji cixarir (misal: bele bir metod yoxdu )
//__callStatic -> static olmayan biy metodu cagirdiqda eynnen "__call" kimi xeta yerine ekrana mesaj cixarir  (misal: bele bir  static metod yoxdu )
//__get -> erisile bilinmeyen (private,protected) methodlar cagirildiqda xeta yerine ekrana mesaj yazdirir ( misal: bu metoda erisile bilinmez yada bele method yoxdu)
//__set ->olmayan ve ya  erisile bilinmeyen (private,protected) metodlarina deyer velirildikde xeta yerine ekrana mesaj yazdirir ( misal: bu metoda erisile bilinmez yada bele method yoxdu)
//__sleep -> class olan deyerler (nesneleri) array formasina cevirir
//__wakeup -> array leri nesne(class deyerlir)halina getirir
//__toString -> nesne ($ad=new ad()-daki "$ad") ekrana yazdirilmaga calisildiqda
//__invoke -> nesne function kimi yazildiqda - ($ad=new ad();$ad(deyer))
//__clon -> nesnenin clonun almaq isdedikde isdifade olunur
// __debugInfo -> nesneye var_dump etdikde  isdifade etdilir
//__set_state -> nesneye var_export etdikde isdifade olunur
//class frut
//{
//    private $name;//<-varebil(properti)
//    protected $color;
//    const mesage = "hello php";////<- buradaki "const" sabitdir
//    static $warnig = "static metod";
//
//    function message()
//    {
//        $text = "test adi:{$this->name}<br>";
//
//        $text .= "test rengi:{$this->color}";
//        return $text;
//    }
//
//    function setname($name) //<-> 'name' deyer verende "set" isdifade olunur
//    {
//        $this->name = $name;
//    }
//
//    function getname() ///<-> 'name' verilen deyeri gosdermey ucun "get" isdifade olunur
//    {
//        return $this->name;
//    }
//
//    function setcolor($color)
//    {
//        $this->color = $color;
//    }
//
//    function getcolor()
//    {
//        return $this->color;
//    }
//}

