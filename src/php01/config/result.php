<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);


print "お名前は" . $name . "ですね" . "<br />";
print "ご希望の商品は、" . $choices . "<br />";
print "注文数は、". $number;