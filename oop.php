<?php

class Book{
private $title;
private $availableCopies;


function __construct($title, $availableCopies)
{
    $this->title = $title;
    $this->availableCopies = $availableCopies;
}

function getTitle()
   {
return $this->title;
    }

function getAvailableCopies()
     {
return $this->availableCopies;
      }

function borrowBook()
     {
return $this->availableCopies - 1 ;
     }

function returnBook()
     {
        return $this->availableCopies + 1 ;
     }


}





class member{
   private $name;
  
  
   function __construct($name)
   {
      $this->name = $name;
     
      }

   function getName()
      {
      return $this->name;
      }


   function borrowBook()
       {
       
       }

    function returnBook()
      {
        
      }
}

$TheGreatGatsby = new Book(" 'The Great Gatsby' ",5);
$ToKillaMockingbird = new Book(" 'To Kill a Mockingbird' ",3);

$JohnDoe = new member("John Doe");
$JaneSmith = new member("Jane Smith");

echo "Available copies of";
echo $TheGreatGatsby->getTitle();
echo " : ";
echo $TheGreatGatsby->borrowBook();

echo "\n";

echo "Available copies of";
echo $ToKillaMockingbird->getTitle();
echo " : ";
echo $ToKillaMockingbird->borrowBook();

?>