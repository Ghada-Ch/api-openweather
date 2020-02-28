<html>
<body>
<?php
$url="api_url&appid=your_api_key";
 $raw =file_get_contents($url);
    $json = json_decode($raw);

echo "<table>";
if(!empty($json->list)) {

echo "<tr><th>Time</th><th>Pressure</th><th>Degree (F)</th>";
foreach($json->list as $msg) {

    echo "<tr><td>" .$msg->dt_txt. "</td><td>" . $msg->main->pressure ." </td><td> ". $msg->wind->deg."</td></tr>";
    echo "<br />";
}

}else {
    echo "Rien n'a &eacute;t&eacute; trou&eacute;.";
}
echo "</table>";
?>
<style>
table, th, td {
  border: 1px solid black;
}
table{
top:3em;
position:absolute;
}
</style>
</body>
</html>
