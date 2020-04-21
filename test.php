<?php

require_once('autoload.php');

use exo\AdvancedString;
use exo\Point;
use exo\Wrestler;

$youngBucks1 = new Wrestler("Matt", "Jackson");
$youngBucks1->sayHello();
$returnLine = "\n";
echo $returnLine;
//exo1
$stringTest = new AdvancedString("Too sweet");
echo $stringTest->uppercase();
echo $returnLine;

echo $stringTest->undercase();
echo $returnLine;

echo $stringTest->bold();
echo $returnLine;

echo $stringTest->italic();
echo $returnLine;

echo $stringTest->underline();
echo $returnLine;


//exo2
$p1 = new Point(4, 5);
$p2 = new Point(2, 3);
echo $p1->distance($p2);
