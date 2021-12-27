<?php
const X = 360;
const Y = 75;
const Z = 212;

$tmp['tnt'] = ['x' => [], 'z' => []];
$tmp['air'] = ['x' => [], 'z' => []];

$min_x = X - 300;
$max_x = X + 300;

for ($i = $min_x; $i <= $max_x; $i = $i + 20)
{
	$x1 = $i + rand(0,2);
	$y1 = Y;
	$z1 = Z + rand(1,2);

	$x2 = $x1 + rand(0,2);
	$y2 = $y1 + rand(10,90);
	$z2 = $z1 + rand(0,2);

	$tmp['tnt']['x'][] = "/fill " . $x1 . " " . $y1 . " " . $z1 . " " . $x2 . " " . $y2 . " " . $z2 . " minecraft:tnt\n";
	$tmp['air']['x'][] = "/fill " . $x1 . " " . $y1 . " " . $z1 . " " . $x2 . " " . $y2 . " " . $z2 . " minecraft:air\n";

}



for ($j = $min_x; $j <= $max_x; $j = $j + 20)
{
	$x1 = X + rand(0,2);
	$y1 = Y;
	$z1 = $j + rand(1,2);

	$x2 = $x1 + rand(0,2);
	$y2 = $y1 + rand(10,90);
	$z2 = $z1 + rand(0,2);

	$tmp['tnt']['z'][] = "/fill " . $x1 . " " . $y1 . " " . $z1 . " " . $x2 . " " . $y2 . " " . $z2 . " minecraft:tnt\n";
	$tmp['air']['z'][] = "/fill " . $x1 . " " . $y1 . " " . $z1 . " " . $x2 . " " . $y2 . " " . $z2 . " minecraft:air\n";

}






































foreach ($tmp['air'] as $key => $value) 
{		
	foreach($value as $v) echo $v;
	foreach($value as $v) echo $v;
}

echo "\n\n\n\n\n\n";

foreach ($tmp['tnt'] as $value) 
{
	foreach($value as $v) echo $v;
	foreach($value as $v) echo $v;
}

echo "\n\n\n\n\n\n";