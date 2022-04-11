<?php

function eat() 
{
  function survive() 
  {
    echo "I don't exist until eat() is called.\n";
  }
}

/* We can't call survive() yet
   since it doesn't exist. */

eat();

/* Now we can call survive(),
   eat()'s processing has
   made it accessible. */

survive();

// I don't exist until eat() is called.