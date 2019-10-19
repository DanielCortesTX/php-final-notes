<?php 

// classes

// instantiate a class

class User {
  public $email;
  public $name;

  // This is how you make a constructor function
  public function __construct($name, $email){
    // $this->email = 'mario@gmail.com';
    // $this->name = 'mario';
    $this->email = $email;
    $this->name = $name;

  }

  public function login(){
    echo $this->name . ' logged in.';
  }
}

// $userOne = new User();

// how you access a function on an object
// $userOne->login();
// echo $userOne->name;
$userTwo = new User('yoshi', 'yoshi@gmail.com');
// echo $userTwo->name;
// echo $userTwo->email;
$userTwo->login();

?>