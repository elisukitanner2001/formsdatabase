<?php
echo "My first PHP script!";
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
print "<h5>PHP uses print or print() like python2 vs python3</5>";
print "<h2>hello from a print statement without()</h2><br>";
print("<h2>hello from a print statement with ()</h2><br>");
?>

<br>

<hr>

<?php
echo "<br>Current Date & time for major cities around the world ";

$date = new DateTime('now', new DateTimeZone('America/Boise'));
echo "<br>";
echo "Current time in Boise, Idaho ";
echo $date -> format('m/d/Y/h:i:s');
$date = new DateTime('now', new DateTimeZone('America/New_York'));
echo "<br>";
echo "Current time in Washington, DC ";
echo "<br>";
echo $date -> format('m/d/Y/h:i:s');
$date = new DateTime('now', new DateTimeZone('Europe/London'));
echo "<br>";
echo "Current time in London, UK ";
echo "<br>";
echo $date -> format('m/d/Y/h:i:s');
$date = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
echo "<br>";
echo "Current time in Tokyo, Japan ";
echo "<br>";
echo $date -> format('m/d/Y/h:i:s');
$date = new DateTime('now', new DateTimeZone('Europe/Luxembourg'));
echo "<br>";
echo "Current time in Luxembourg";
echo "<br>";
echo $date -> format('m/d/Y/h:i:s');
echo "<br><hr><br>";
//	echo "<br> calculate number of days till Christmas<br>";
//$target = mktime(0, 0, 0, 12, 25, 2017);
//	$today = time();
//	$difference = ($target - $today);
//	$days = (int)($difference / 86400);
//	$hours = (int)((difference / 86400) / 3600);
//	print "Christmas will occur in $days days";
//	print "Christmas will occur in $hours hours";
$rem = strtotime('2017-12-25 00:00:00') - time();
$day = floor($rem / 86400);
$hr = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
print " christmas will occur in $day days, $hr hours, $min minutes, and $sec seconds.<br>";

$rem = strtotime('2022-01-08 02:42:00') - time();
$day = floor($rem / 86400);
$hr = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
print "I can buy a pistol in $day days, $hr hours, $min minutes, $sec seconds.";
echo "<br> calculate number of days till Thanksgiving<br>";
$target = mktime(0, 0, 0, 11, 23, 2017);
$today = time();
$difference = ($target - $today);
$days = (int)($difference / 86400);
print "Thanksgiving will occur in $days days";
echo "  <br>";

echo "<br>";
?>