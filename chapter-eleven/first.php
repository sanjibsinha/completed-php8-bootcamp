<?php

$iAmHuman = true;

/* We can't call eat() from here 
   since it doesn't exist yet,
   but we can call survive() */

survive();

if ($iAmHuman) {
  function eat()
  {
    echo "I can't survive until I eat.\n";
  }
}

/* Now we can safely call eat()
   since $iAmHuman evaluated to true */

if ($iAmHuman) eat();

function survive() 
{
  echo "I survive because I've eaten. (that means the function eat() has been called).\n";
}

// I survive because I've eaten. (that means the function eat() has been called). 

// I can't survive until I eat.