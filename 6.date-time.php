<?php
echo "<h3>PHP Date and Time</h3>";

// time(): int - Return current Unix timestamp in seconds
// The unix time stamp is a way to track time as a running total of seconds. This count starts at the Unix Epoch on January 1st, 1970 at UTC. 
// Therefore, the unix time stamp is merely the number of seconds between a particular date and the Unix Epoch.  Unix epoch time (01-01-1970)

echo time()."<br>"; // 1689566419 -> time in sec without fractions
// echo time()+(24*60*60)."<br>"; // +1 day
// echo time()-(24*60*60)."<br>"; // -1 day

// echo date('d-m-Y h:i:s', time())."<br>";
// echo date('d-m-Y h:i:s', time()+(24*60*60))."<br>"; // next day adding 24 hours
// echo date('d-m-Y h:i:s', strtotime('tomorrow'))."<br>";

// microtime(bool $as_float = false): string|float  -- Return current Unix timestamp with microseconds
echo microtime()."<br>"; // "0.77358800 1689566419"  string
echo microtime(true)."<br>"; // 1689566419.7736  float  -> time in sec with fractions


// sleep() and usleep()
// sleep(int $seconds): int     -- Delay code execution in sec
// sleep for 10 seconds --> sleep(10);
// usleep(int $microseconds): void      -- Delay code execution in msec
// wait for 2 milliseconds -> usleep(2000);
// wait for 30 milliseconds  -> usleep(30000);
// sleep(8);
// usleep(20000);


// date() - Returns a formatted date string
// date(string $format, ?int $timestamp = null): string
echo date('d-M-Y')."<br>"; // 17-Jul-2023
echo date('d-M-Y', 34534659999)."<br>"; // 11-May-3064
echo date('d-M-Y g:ia')."<br>"; // 17-Jul-2023 9:47am
echo date('d-M-Y g:ia', time())."<br>"; // 17-Jul-2023 9:47am
echo date('d-M-Y', strtotime('01-12-2014'))."<br><br>"; // 01-Dec-2014

echo date('d-M-Y', time()+(5*24*60*60))."<br>"; // 22-Jul-2023  -> +5 days
echo date('d-M-Y', strtotime('tomorrow'))."<br>"; // 18-Jul-2023  -> next day
echo date('d-M-Y', strtotime('last day of february'))."<br>"; // 28-Feb-2023

// echo date('d-M-Y', strtotime('now'));
// echo date('d-M-Y', strtotime('tomorrow'));
// echo date('d-M-Y', strtotime('yesterday'));
// echo date('d-M-Y', strtotime('day after tomorrow'));
// echo date('d-M-Y', strtotime('+1 day'));
// echo date('d-M-Y', strtotime('tomorrow +1 day'));
// echo date('d-M-Y', strtotime('now +1 day'));
// echo date('d-M-Y', strtotime('now -2 day'));
// echo date('d-M-Y', strtotime('12-12-12 -1 day -1 month -1 year'));
// echo date('d-M-Y', strtotime('-1 day'));
// echo date('d-M-Y', strtotime('+1 month'));
// echo date('d-M-Y', strtotime('+1 year'));


echo "<br>";
echo date_default_timezone_get(); // Asia/Calcutta
echo "<br>";
echo date('g:ia')."<br>";

date_default_timezone_set('America/New_York');
echo date_default_timezone_get();
echo "<br>";
echo date('g:ia')."<br>";

date_default_timezone_set('UTC');
echo date_default_timezone_get();
echo "<br>";
echo date('g:ia')."<br>";

// escaping chars in date()
echo date('l \t\h\e jS')."<br>"; // Monday the 17th
echo "<hr>";





// PHP DateTime class
// https://www.phparch.com/2022/10/the-php-datetime-class/

// public __construct(string $datetime = "now", ?DateTimeZone $timezone = null)
// new DateTime(string $datetime = "now", ?DateTimeZone $timezone = null);
// $datee = new DateTime('now', new DateTimeZone('EST'));

// $dateTime = new DateTime('now');
// $dateTime = new DateTime('tomorrow');
$dateTime = new DateTime('29-02-2012');

var_dump($dateTime);
echo "<br>";

echo $dateTime->format('d-M-Y h:i:s')."<br>";

// Creating From Formatted Dates
$date = DateTime::createFromFormat(
    "d/m/y h:i:s",
    "11/12/08 08:00:00"
);
// var_dump($date->format("Y-m-d H:i:s"));
echo "<br>";


// Adding and Subtracting Time
$date = new DateTime("2022-12-01 00:00:00");
$date->modify("+1 month");
$date->modify("+1 year +1 month");
$date->modify("-1 year +1 month");


// Comparing Two Dates
$date1 = new DateTime("2022-12-01 00:00:00");
$date2 = new DateTime("2024-01-25 01:01:01");
// $diff = $date1->diff($date2);
// echo "years -> {$diff->y}", PHP_EOL;
// echo "months -> {$diff->m}", PHP_EOL;
// echo "days -> {$diff->d}", PHP_EOL;


$date1 = new DateTime("2022-12-01 00:00:00");
$date2 = new DateTime("2024-01-25 01:01:01");
$diff = $date1->diff($date2);
// var_dump($diff->format(
//     "%y years %m months %d days %H:%i:%s and %R%a total days"
// ));
// var_dump($diff->format('%Y years , %M months,  %d days'));
echo "<br>";


// Time Zones

$date = new DateTime("2022-12-01 00:00:00");
$date->setTimezone(new DateTimeZone('America/New_York'));
$date->setTimezone(new DateTimeZone('Asia/Calcutta'));
// echo $date->getTimezone()->getName();
// $tz = $date->getTimezone();
// echo $tz->getName();
echo "<br>";

$dateEST = new DateTime('now', new DateTimeZone('EST'));
echo 'EST time -> '.$dateEST->format('h:i:s a');
echo "<br>";

$dateUTC = new DateTime('now', new DateTimeZone('UTC'));
echo 'UTC time -> '.$dateUTC->format('h:i:s a');
echo "<br>";

$dateIST = new DateTime('now', new DateTimeZone('Asia/Calcutta'));
echo 'IST time -> '.$dateIST->format('h:i:s a');
echo "<br>";
