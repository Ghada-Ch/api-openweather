# api-openweather
# How to use openweather api in php </br>
1_API key </br>
To use the OpenweatherMap API, you need to obtain an API key. Sign up <a href="https://home.openweathermap.org/users/sign_up">here</a>.</br>
2_Test your API </br>
Once you get your API Key ,choose an API:</br>
<ul>
<li>Current weather API (Free)</li>
<li>4 days/hourly forecast API</li>
<li>16 days/daily forecast API</li>
<li>Climate forecast for 30 days</li>
<li>5 days/3 hour forecast API(Free)</li>
<li>Weather maps 1.0(Free)</li>
<li>Weather maps 1.0 (Free)</li>
<li>Bulk download</li>
<li>UV index(Free)</li>
<li>Weather alerts(Free)</li>
</ul>
Note:Read tha API doc</br>
You can test your API using <a href="https://apitester.com/">apitester</a></br>
use a json editor to read your data <a href="https://jsoneditoronline.org">JsonEditor </a></br>
3_Use php to call openweather API</br>
use test.php</br>
To modify :</br>
1)$url="api_url&appid=your_api_key";</br>

*replace api_url by the API url (you will find it in the API doc in openweather )</br>
*replace your_api_key by your API key (you will find it in your profile in openweather before Sing in)</br>
2)</br>
if(!empty($json->groups)) {
foreach($json->list as $msg) {
    echo "<u>" . $msg->id ."</u> : ". $msg->name;</br>
  replace groups,list,id,name as you need from the API json </br>
  Example:</br>
  my json :</br>
  <img src="home/ghada/Images/json.png"></br>
  <ul>
  <li>groups=> object</li>
  <li>list=>list</li>
  <li>id=>id</li>
  <li>name=>name</li>
  </ul>
  you can also add</br>
  foreach($msg->main as $m) {
    echo "Pressure : " . $msg->pressure ."</br> Hymidity : ". $msg->hymidity;
    }
    
