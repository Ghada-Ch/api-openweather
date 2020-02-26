<html>
<body>
<?php
 $url = "http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22?id=ddd472af7108b851e7bc8caafeb9596e";
    $raw =file_get_contents($url);
    $json = json_decode($raw);


if(!empty($json->groups)) {
foreach($json->list as $msg) {
    echo "<u>" . $msg->id ."</u> : ". $msg->name;
    echo "<br />";
}
}else {
    echo "Rien n'a &eacute;t&eacute; trou&eacute;.";
}

?>

</body>
</html>
