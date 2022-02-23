<?php include ("header.php"); ?>
<p>
    <?php $color = array('white', 'green', 'red');
    print ("Output: <br/>");
    foreach ($color as $col) print ($col . ", ");
    ?>
</p>
<ul>
    <?php sort($color);
    foreach ($color as $col) print ("<li>" . ucfirst($col) . "</li>");
    ?>
</ul>
<?php include ("footer.php"); ?>
