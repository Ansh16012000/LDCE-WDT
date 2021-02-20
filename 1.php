<?php //start php code
date_default_timezone_set('Asia/Kolkata'); //set timezone
echo "Today is " . date("d/m/y") . "<br>"; // print today date
echo "The time is " . date("h:i:sA") . "<br>"; //print current time
$time = date("H"); //get value of time in variable only hours
if ($time < "12") { //check conditionpp
echo "Good morning";
}
else
if ($time >= "12" && $time < "17")
{
echo "Good afternoon";
}
else
if ($time >= "17" && $time < "19")
{
echo "Good evening";
}
else
if ($time >= "19")
{
echo "Good night".'<br>';
}

echo "Name : Ansh Verma".'<br>';
echo "Roll No. : 151602";
?>