<?php
error_reporting(E_ALL);
$juices = ["apple", "orange", "koolaid1" => "purple"];

echo "He drank some $juices[0] juice." . PHP_EOL;   // He drank some apple juice.
echo "He drank some $juices[1] juice." . PHP_EOL;   // He drank some orange juice.
echo "He drank some juice made of $juices[0]s." . PHP_EOL;    // Won't work // He drank some juice made of apples.
echo "He drank some $juices[koolaid1] juice." . PHP_EOL; // He drank some purple juice.

class people
{
	public $john   = "John Smith";
	public $jane   = "John Smith";
	public $robert = "Robert Paulsen";

	public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice." . PHP_EOL;        // John Smith drank some apple juice.
echo "$people->john then said hello to $people->jane." . PHP_EOL;   // John Smith then said hello to John Smith.
echo "$people->john's wife greeted $people->robert." . PHP_EOL;     // John Smith's wife greeted Robert Paulsen.
echo "$people->robert greeted the two $people->smith.";      // Won't work   // Robert Paulsen greeted the two Smith.

ini_set('display_errors', true);
ini_set('html_errors', false);
// Simple array:
$array = [1, 2];
$count = count($array);
for ($i = 0; $i < $count; $i++) {
	echo "\nChecking $i: \n";
	echo "Bad: " . $array['$i'] . "\n";
	echo "Good: " . $array[$i] . "\n";
	echo "Bad: {$array['$i']}\n";
	echo "Good: {$array[$i]}\n";
}

foreach($array as $item){
	echo $item . '，';
}
?>
