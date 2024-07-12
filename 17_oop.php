<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User{
    // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  //A constructor is a method that runs when an object is created
 public function __construct($name, $email, $password){
  $this->name=$name;
  $this->email=$email;
  $this->password=$password;
 }
  //Method is a function that belongs to a class
  // function set_name($name){
  //   $this->name=$name;
  // }
  // function get_name(){
  //   return $this->name;
  // }
}

//Institiate a user object
$user1 = new User("John", "john@gmail.com","34343");
$user2 = new User("Brad","brad@gmail.com","83638");

// echo $user1->email;
// echo $user2->name;

// $user1->set_name("John");
// $user2->set_name("Brad");

// echo $user1->get_name("John");
// echo $user2->get_name("Brad");
// var_dump($user1);
// echo $user1->name . "<br>";


// Inheritance

class Admin extends User {
  private $title;

  public function __construct($name, $email, $password, $title) {
      parent::__construct($name, $email, $password);
      $this->title = $title;
  }
  public function get_title() {
      return $this->title;
  }
}
// Creating an Admin object with four parameters
$admin = new Admin("John", "john@gmail.com", "34343", "Manager");

// Corrected variable name and line break tag
echo $admin->get_title() . "<br>";

