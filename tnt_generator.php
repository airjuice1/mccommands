<?php
const X = -24;
const Y = 0;
const Z = -51;

$command['tnt'] = [];
$command['air'] = [];

$step		 = 50;
$perimetr    = 550;
$start_pos_x = X - $perimetr;
$final_pos_x = X + $perimetr;
$start_pos_z = Z - $perimetr;
$final_pos_z = Z + $perimetr;

for ($z = $start_pos_z; $z <= $final_pos_z; $z = $z + $step, $start_pos_z = $start_pos_z + $step) 
{
	$z1 = $start_pos_z;

	for ($x = $start_pos_x; $x <= $final_pos_x ; $x = $x + $step)
	{
		$x1 = $x;
		$y1 = Y;		
		$x2 = $x + 1;
		$y2 = Y + rand(100,200);
		$z2 = $z1 + 1;		

		$command['air'][] = '/fill ' . $x1 . ' ' . $y1 . ' ' . $z1 . ' ' . $x2 . ' ' . $y2 . ' ' . $z2 . ' minecraft:air' . "\n";
		$command['tnt'][] = '/fill ' . $x1 . ' ' . $y1 . ' ' . $z1 . ' ' . $x2 . ' ' . $y2 . ' ' . $z2 . ' minecraft:tnt' . "\n";
	}
}


echo "\n\n\n\n\n";
foreach ($command['air'] as $key => $value) echo $value;
echo "\n\n\n\n\n";
foreach ($command['tnt'] as $key => $value) echo $value;
echo "\n\n\n\n\n";