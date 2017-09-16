<?
$json = array();
for( $a = 0; $a < 5; $a++ ){

	$json[$a] = array(

		"title" => "Long Event " . $a,
	    "start" => "2017-07-07 ",
	    "end" => "2017-07-10"
	);
}

#$json_array[] = $json;

$jsonencoded = json_encode( $json, JSON_PRETTY_PRINT );
$fh = fopen( "events.json", 'w' );
fwrite( $fh, $jsonencoded );
fclose( $fh );