<?
echo "Array_seach<br>";

$partidas[0] = array(
		"idgpo" => "123"
	);
$partidas[1] =  array(
		"idgpo" => "123"
	);
$partidas[2] =  array(
		"idgpo" => "1234"
	);

echo 'count ==> ' . count( $partidas ) . '<br>';
print_r( $partidas );
$array_father = array();
$partida_array = array();

for( $f = 0; $f < count( $partidas ); $f++ ){

	echo '<br> xxx ' . $partidas[$f]["idgpo"] . '<br>';

	if( !in_array( $partidas[$f]["idgpo"], $array_father, TRUE ) )
	{
		
		$array_father[] = $partidas[$f]["idgpo"];
		$partida_array[] = $partidas[$f];
	}
}

echo '<pre>';print_r( $array_father );echo '</pre>';
/*
$data["partidas_father"] = $partida_array;
$data["subpartidas"] = $partida_array;*/
?>