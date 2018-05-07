<?
/*
function distance( $lat1, $lon1, $lat2, $lon2 ){

	$theta = $lon1 - $lon2;
	$dist = sin( deg2rad( $lat1 ) ) * sin( deg2rad( $lat2 ) ) +  cos( deg2rad( $lat1 ) ) * cos( deg2rad( $lat2 ) ) * cos( deg2rad( $theta ) );
	$dist = acos( $dist );
	$dist = rad2deg( $dist );
	$miles = $dist * 60 * 1.1515;

	return ( $miles * 1.609344 );
}

$punto[0] = [32.9697, -96.80322];
$punto[1] = [29.46786, -98.53506];
$punto[2] = [29.46786, -98.53506];

$punto_text[0] = "X1 - Y1";
$punto_text[1] = "X2 - Y2";
$punto_text[2] = "X3 - Y3";

//Distancias

for( $d = 0; $d < 3; $d++ ){

	echo " distancia entre : " . $punto_text[$d] . distance( $punto[$d][0], $punto[$d][1], $punto[($d+1)][0], $punto[($d+1)][1] ) . " Kilómetros<br>";
}*/
/*
function isCasiPalindromo( $text ){

	$text = strtolower( $text );
	$long_text =strlen( $text );

	$i = 1;
	$cad2 = '';
	while( $i <= $long_text ){


		$desc = ( $long_text ) - $i;
		$cad = substr( $text, $desc, 1 );
		$cad2 = $cad2 . $cad;

		$i++;
	}

	$palindromo_b_a = substr( $text, 1, ( $long_text - 1 ) );
	$palindromo_b_b = substr( $text, ( $long_text - 1 ) );

	return $palindromo_b_a . " <== " . $palindromo_b_b;

	if( $text == $cad2 ){

		return "La Palabra Es Palindromo";
	}
	elseif( $palindromo_b_a == $palindromo_b_b ){

		return "La Palabra Es Palindromo";
	}
	else{

		return "La Palabra No Es Palindromo";
	}
}

echo "abccba => " . isCasiPalindromo( "abccba" ) . "<br>";
echo "abccbx => " . isCasiPalindromo( "abccbx" ) . "<br>";
echo "abccfg => " . isCasiPalindromo( "abccfg" ) . "<br>";*/

function array_number( $array, $lng ){

	$valores = array_count_values( $array );
	$data_array = array();

	foreach ( $valores as $value ){
		
		if( $value > 1 ){

			$data_array[] = $valores;
		}
	}

	return $data_array;
}

$data = array_number( [34,31,34,35,40,35,2], 7 );
print_r( $data );
?>