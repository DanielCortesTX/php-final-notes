<?php 

// classes

// instantiate a class

class User {
  private $email;
  private $name;

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

  public function getName(){
    return $this->name;
  }

  public function setName($newName){
    if(is_string($newName) && strlen($newName) > 1){
      $this->name = $newName;
      return "name has been updated to $newName";
    } else {
      return 'not a valid name';
    }
  }
}

// $userOne = new User();

// how you access a function on an object
// $userOne->login();
// echo $userOne->name;
$userTwo = new User('yoshi', 'yoshi@gmail.com');
// echo $userTwo->name;
// echo $userTwo->email;
// echo $userTwo->getName();
// echo $userTwo->setName(50);
echo $userTwo->setName('shaun');
echo $userTwo->getName();

?>