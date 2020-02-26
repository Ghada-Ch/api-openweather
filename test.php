<html>
<body>
<?php
$url="api_url&appid=your_api_key";
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
