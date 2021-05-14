
<?php
  
/**
//Advantages:

Inheritance promotes reusability. When a class inherits or derives another class, it can access all the functionality of inherited class.
Reusability enhanced reliability. The base class code will be already tested and debugged.
As the existing code is reused, it leads to less development and maintenance costs.
Inheritance makes the sub classes follow a standard interface.
Inheritance helps to reduce code redundancy and supports code extensibility.
Inheritance facilitates creation of class libraries.

*/

  class A {
     public function insideA() {
      echo "This is class A"."<br>";
       }
  }
    
  interface B {
     public function insideB();
  }
    
  class Multiple extends A implements B {
    
      function insideB() {
          echo "\nI am in interface"."<br>";
      }
    
      public function insidemultiple() {
      echo "\nI am in inherited class"."<br>";
      }
  }
    
  $display = new Multiple();
  $display->insideA();
  $display->insideB();
  $display->insidemultiple();


/**
  //Disadvantages:-

    PHP does not support multiple inheritance
    Inherited functions work slower than normal function as there is indirection.
    Improper use of inheritance may lead to wrong solutions.
    Often, data members in the base class are left unused which may lead to memory wastage.
    Inheritance increases the coupling between base class and derived class. A change in base class will affect all the child classes.
*/

trait animal{

public function first_function(){

echo "Cattle form animal trial"."<br>";

    }
}

trait bird{

public function first_function(){

echo "Parrots From bird Trait"."<br>";

    }
}

class birdAnimal{

    use animal, bird{

// This class will now call the method

// first function from animal only

animal::first_function insteadof bird;

    }
}

$obj = new birdAnimal;

$obj->first_function();


?>

