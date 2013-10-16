<?php
ini_set('error_reporting',E_ALL);
ini_set('display_errors',1);
ini_set('html_errors',1);

function getTweetCount($url) {
	$url = urlencode($url);
	$twitterEndpoint = "http://urls.api.twitter.com/1/urls/count.json?url=%s";
	$fileData = file_get_contents(sprintf($twitterEndpoint, $url));
	$json = json_decode($fileData, true);
	unset($fileData); // free memory
	//print_r($json);
	return $json['count'];
}

function getPlusOnes($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
	$curl_results = curl_exec ($curl);
	curl_close ($curl);
	$json = json_decode($curl_results, true);
	return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
}

function getFacebookData($url) {
	$fql  = "SELECT url, normalized_url, share_count, like_count, comment_count, ";
	$fql .= "total_count, commentsbox_count, comments_fbid, click_count FROM ";
	$fql .= "link_stat WHERE url = '{$url}'";

	$apifql="https://api.facebook.com/method/fql.query?format=json&query=".urlencode($fql);
	$json=file_get_contents($apifql);
	return json_decode($json,true);
}

$signos = array('acuario','piscis','aries','tauro','geminis','cancer','leo','virgo','libra','escorpio','sagitario','capricornio');

foreach($signos as $signo) {
	echo "<h3 style='margin:0;'>{$signo}</h3>";
	echo date('H:i:s') . " - Tuits: " . getTweetCount('http://horoscopo.starmedia.com/'.$signo.'.html') ."<br>";
	$fbData = getFacebookData('http://horoscopo.starmedia.com/'.$signo.'.html');
	echo date('H:i:s') . " - FB likes: " . $fbData[0]['total_count'] ."<br>";
	// echo "<pre><code>" . var_dump($fbData[0]) . "</code></pre>";
	echo date('H:i:s') . " - G+1s: " . getPlusOnes('http://horoscopo.starmedia.com/'.$signo.'.html') ."<br>";
}
