<?php

$string = "Hello";
echo strlen($string);

$string1 = "My name is Alex";
echo mb_substr($string1,0,2,);

$string2 = "1 2 3 4 5";
$exarray = explode(" ",$string2);
echo $exarray[1];

$newString = implode($exarray," ");
echo $newString;

$newString1 = join($exarray," ");
echo $newString1;

echo nl2br("Hello
New line
Another new line");

echo strrev("Hello");

echo strtolower($string);

echo strtoupper($string1);

$search = "My name is sakthivel . what is your name";
$result = substr_count($search,"name");
echo $result;

$result1 = substr_replace($search,"sakthi",11,19 );
echo $result1;

?>