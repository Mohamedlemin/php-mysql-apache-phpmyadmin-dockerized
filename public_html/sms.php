
<?php

$url = curl_init();
$contex='';
$text='message+de+teste';

$url1= "http://172.20.10.3:8090/SendSMS?username=gfa&password=1234&phone=33536600&message=$text";
// set URL and other appropriate options
curl_setopt($url, CURLOPT_URL, $url1);

// grab URL and pass it to the browser
curl_exec($url);



?>



