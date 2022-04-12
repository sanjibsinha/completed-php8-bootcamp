<?php

$username;

function GreetingsDisplay($message, ?string $username)
{

    return $message . " " . $username;
}
echo GreetingsDisplay("Hello", "John");

echo('<br>');

echo GreetingsDisplay("Hello", null);

echo('<br>');

$x;
$y;

function bar(?string $x, ?int $y)
{
    var_dump($x, $y);
}

bar('Hi John smith', 100);
echo('<br>');
bar(null, null);
echo('<br>');


class C
{
}

function foo(?C $c)
{
    var_dump($c);
}

foo(new C);
echo('<br>');
foo(null);

/**
Hello John
Hello
string(13) "Hi John smith" int(100)
NULL NULL
object(C)#1 (0) { }
NULL  
 */
