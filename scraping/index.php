<?
$url = "https://yespornplease.com";

$data = file_get_contents( $url );

echo htmlentities( $data );

foreach ($data as $value) {
	print_r( $value );
}
?>