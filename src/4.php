<?php

/**
 * file 4.php
 * Description : Magic Method __construct(), __destruct()
 */

if (php_sapi_name() == "cli") {
    // In cli-mode
    define('LINE_BREAK', "\n");
} else {
    // Not in cli-mode
    define('LINE_BREAK', "<br />");
}

class Human {
    
    /**
     * Class member variables are called "properties".
     * http://php.net/manual/en/language.oop5.properties.php
     */
    
    public $name = 'Human';
    
    private $nationality = 'Thai';
    
    protected $nickName = 'Tun';
    
    function __construct($name, $nickName) {
        $this->name = $name;
        $this->nickName = $nickName;
        echo 'on __construct()' . LINE_BREAK;
    }
    
    public function eat() {
        echo $this->name . ' Eat';
    }
    
    private function think() {
        $number = rand(0, 100);
        return $number;
    }
    
    protected function walk() {
        return 'I am walker';
    }
    
    public function introduce() {
        $text = 'My name is ' . $this->name . LINE_BREAK;
        $text .= 'My nickname is ' . $this->nickName . LINE_BREAK;
        $text .= 'My nationality is ' . $this->nationality . LINE_BREAK;
        return $text;
    }
    
    public function __destruct() {
        echo 'on __destruct()' . LINE_BREAK;
    }
    
}

//Create Object
$humanObject = new Human('Kittinan', 'Tun Handsome');
echo $humanObject->introduce();