<?php include ("header.php");
$arr = array();
foreach (file("task3.txt") as $line)
{
    list($key, $value) = explode(" ", $line);
    $arr[$key] = $value;
}
foreach ($arr as $key => $value)
{
    print ("Key: “" . $key . "” Value: “" . $value . "”<br/>");
}
include ("footer.php");

