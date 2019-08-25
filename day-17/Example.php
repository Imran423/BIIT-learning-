<?php


class Example
{
    public $name = 'Imran Hossain';
    protected $city = 'Narayangonj';
    private $country = 'Bangladesh';
    private $value;

    public function __construct()
    {
//        echo 'in construct';
    }

    public function addition(){
        echo 'In addition';
    }

    protected function subtraction(){
        echo 'In Subtraction';
    }

    private function division(){
        echo 'In division';
    }
}