<?php include ("header.php");
$arr = array("1", "2", "3", "4", "5"); ?>
<h2>Array: </h2>
<?php foreach ($arr as $val) print ($val . " ") ?>
<form method="post" action="Task4.php">
    Enter the Value: <label>
        <input type="text" name="val">
    </label><br>
    Enter the Index: <label>
        <input type="text" name="index">
    </label><br>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["index"]) || empty($_POST["val"]))
    {
        print ("<h2>Empty Fields!</h2>");
    }
    else
    {
        array_splice($arr, $_POST["index"], 0, $_POST["val"]);
        print ("<h2>New Array: </h2>");
        foreach ($arr as $elem) print ($elem . " ");
    }
}
include ("footer.php"); ?>
