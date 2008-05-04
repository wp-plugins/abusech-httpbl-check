<?php
/*
Plugin Name: abuse.ch httpBL check
Version: 1.3
Plugin URI: http://dnsbl.abuse.ch
Description: Check if a visitor is listed on httpbl.abuse.ch, see http://dnsbl.abuse.ch/faq.php#about_httpbl for more information
Author: admin [at]a abuse {dot} ch
Author URI: http://www.abuse.ch
*/

function check_for_httpbl($logging)
{
	// If you want to disable logging change the $logging variable to "0")
	// If logging is enabled ($logging = "1") the plugin will create a logfile called "httpbl.log". 
	$logging = "1";

	$time = date('M-d-Y H:i:s');
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$hostname = ((gethostbyaddr($ipaddress)==$ipaddress)?"":gethostbyaddr($ipaddress));
	$rev = array_reverse(explode('.', $ipaddress));
	$lookup = implode('.', $rev) . '.' . 'httpbl.abuse.ch.';
	$response = gethostbyname($lookup);
	if ($response == "127.0.0.2") {
	if ($logging == "1") { logit($time,$ipaddress,$hostname,$response); }
		echo "<h1>Your ip-address ($ipaddress) is banned </h1><em>(reason: Hacking activities / Script Kiddie)</em><br>
		<p>Your ip-address is banned because it is blacklisted on httpbl.abuse.ch. It was previous identified as known source of hacking activities.<br />
		For more information take a look at <a href='http://dnsbl.abuse.ch/faq.php#about_httpbl' target='_blank'>http://dnsbl.abuse.ch/faq.php</a></p>"; exit();}
	if ($response == "127.0.0.3") { 
	if ($logging == "0") { logit($time,$ipaddress,$hostname,$responses); }
		echo "<h1>Your ip-address ($ipaddress) is banned </h1><em>(reason: Hijacked webserver / Scanning drone)</em><br>
		<p>Your ip-address is banned because it is blacklisted on httpbl.abuse.ch. It was previous identified as a hijacked webserver or scanning drone.</br>
		For more information take a look at <a href='http://dnsbl.abuse.ch/faq.php#about_httpbl' target='_blank'>http://dnsbl.abuse.ch/faq.php</a></p>"; exit();}
	if ($response == "127.0.0.3") {
	if ($logging == "1") { logit($time,$ipaddress,$hostname,$response); }
		echo "<h1>Your ip-address ($ipaddress) is banned </h1><em>(reason: Referer Spam)</em><br>
		<p>Your ip-address is banned because it is blacklisted on httpbl.abuse.ch. It was previous identified as source of referer spam.</br>
		For more information take a look at <a href='http://dnsbl.abuse.ch/faq.php#about_httpbl' target='_blank'>http://dnsbl.abuse.ch/faq.php</a></p>"; exit();}
}
function logit($time,$ipaddress,$hostname,$response) {
	$logfile = fopen("httpbl.log", a);
	fwrite($logfile, "[$time] - $hostname ($ipaddress) Response: $response\r\n");
}
add_action('init', 'check_for_httpbl');

?>
