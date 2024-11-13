<?php 
    // Scrivi una funzione che ritorni il numero di vocali presenti in una stringa aeiou.

    function getCount(string $str): int {
        $vowels = ['a','e','i','o','u'];
        $count = 0;
        for($i = 0 ; $i < strlen($str); $i++){
          if(in_array($str[$i],$vowels))
            $count++;
        }
        return $count;
      }
?>