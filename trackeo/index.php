<?
/*$result_page = file_get_contents( "http://impulsatucredito.com/" );

print_r( $result_page );*/

$Url = "http://impulsatucredito.com/";
if (!function_exists('curl_init')){ 
	die('CURL is not installed!');
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
print_r( $output );
?>