<?php


//$data = [];
//
//$data[0]=10;
//$data[1]=20;
//$data[2]=30;
//
//$data['name']='Imran';
//$data['city']='Narayangonj';
//$data['country']='Bangladesh';
//
//echo $data['country'];


//$data =[
//    'name'      => 'Imran',
//    'city'      => 'Narayangonj',
//    'country'   => 'Bangladesh',
//    'phone'     => '01940991355',
//    'gender'    => 'Male',
//];

//echo $data['gender'];
//foreach ($data as $value){
//    echo $value.'<br/>';
//}

//echo '<pre>';
//print_r($data);


//$data = [];
//
//$data[0][0] = 10;
//$data[0][1] = 20;
//$data[0][2] = 30;
//
//
//$data[1][0] = 40;
//$data[1][1] = 50;
//$data[1][2] = 60;
//
//
//$data[2][0] = 70;
//$data[2][1] = 80;
//$data[2][2] = 90;
//
//
//$data[3][0] = 100;
//$data[3][1] = 110;
//$data[3][2] = 120;
//
//foreach ($data as $value){
//    echo $value[0].' ' .$value[1].' '.$value[2].'<br/>';
//}



//function demo($firstName=null, $lastName=null){
////    $firstName = 'Hossain';
////    $lastName = 'ImRan';
//    $fullName = $firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
//
//echo '<br/>.....................</br/>';
//echo demo('Rasel');
//
//echo '<br/>.....................</br/>';
//$res = demo('Rasel','Ronjit');
//echo 'Full name is : '.$res;
//
//echo '<br/>.....................</br/>';
//$res = demo('Chulbul', 'Panday');
//echo '<h1>'.$res.'</h1>';

class Demo
{
    public $name = 'Imran hossain';
    public $city = 'Bangladesh';

    function add()
    {
        echo 'In ADD';

    }
    function hello()
    {
        echo 'In Hello';

    }
}
$demo = new Demo();

$demo->add();

echo $demo->name;























