<?php include ("header.php");
$ceu = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
); ?>
<p>
    <?php
    print ("Sample Output: <br />");
    asort($ceu);
    foreach ($ceu as $country => $capital) print ("The capital of " . $country . " is " . $capital . "<br />");
    ?>
</p>
<?php include ("footer.php"); ?>
