<?php

declare(strict_types=1);

class TypeSafety
{
    protected $num1;    
    protected $str1;

    public function __construct(int $num1, string $str1)
    {
        
        $this->num1 = strtoupper((string )$num1);
        $this->str1 = strtolower($str1);
    }
}
$typeSafety = new TypeSafety(456657, 'Json Web');
echo '<pre>';
var_dump($typeSafety);
echo '</pre>';

/**
object(TypeSafety)#1 (2) {
  ["num1":protected]=>
  string(6) "456657"
  ["str1":protected]=>
  string(8) "json web"
}

 */