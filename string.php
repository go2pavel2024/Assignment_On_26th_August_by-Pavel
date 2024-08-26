<?php



$string = array("Hello", "World", "PHP", "Programming");
   
   
   foreach( $string as $value ) 
   {
      echo "Original string: " .$value;
      

      $vowelsCount = countVowels($value);
      
      echo ", Vowels count: " . $vowelsCount;
      
      $reverse=strrev($value);
      echo ",  Reversed string: " .$reverse;

      echo "\n";

   }
   
   
      function countVowels($value)
      {
          $str = strtolower($value);
          $vowelCount = 0;
      
          for ($i = 0; $i < strlen($str); $i++) {
              if (in_array($str[$i], ["a", "e", "i", "o", "u"])) {
                  $vowelCount++;
              }
          }
      
          return $vowelCount;
      }
      
    
?>