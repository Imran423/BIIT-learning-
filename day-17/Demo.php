<?php
require_once 'Example.php';


class Demo extends Example
{
    public $age = 22;
    protected $location = "Banani";
    private $mobile = '01365485479';

    public function newOne(){
//        echo 'In new One';
        $this->addition();
    }
    protected function newTwo(){
        echo 'In new Two';
    }
    private function newThree(){
        echo 'In new Three';
    }
}