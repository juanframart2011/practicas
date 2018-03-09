<!DOCTYPE html>
<html>
<head>
	<title>Leer Archivo Excel</title>
</head>
<body>
<h1>Leer Excel SepoMex</h1>
	<?
	$connect = mysql_connect( "localhost", "root", "mysql" );
	$db = mysql_selectdb( "sepomex", $connect );
	$fila = 0;
	
	$estado[1]["id"] = 1;
	$estado[1]["name"] = "aguascaliente";
	$estado[2]["id"] = 2;
	$estado[2]["name"] = "baja_california";
	$estado[3]["id"] = 3;
	$estado[3]["name"] = "baja_california_sur";
	$estado[4]["id"] = 4;
	$estado[4]["name"] = "campeche";
	$estado[5]["id"] = 7;
	$estado[5]["name"] = "chiapas";
	$estado[6]["id"] = 8;
	$estado[6]["name"] = "chihuahua";
	$estado[7]["id"] = 5;
	$estado[7]["name"] = "coahuila";
	$estado[8]["id"] = 6;
	$estado[8]["name"] = "colima";
	$estado[9]["id"] = 9;
	$estado[9]["name"] = "df";
	$estado[10]["id"] = 10;
	$estado[10]["name"] = "durango";
	$estado[11]["id"] = 11;
	$estado[11]["name"] = "guanajuato";
	$estado[12]["id"] = 12;
	$estado[12]["name"] = "guerrero";
	$estado[13]["id"] = 13;
	$estado[13]["name"] = "hidalgo";
	$estado[14]["id"] = 14;
	$estado[14]["name"] = "jalisco";
	$estado[15]["id"] = 16;
	$estado[15]["name"] = "michoacan";
	$estado[16]["id"] = 17;
	$estado[16]["name"] = "morelos";
	$estado[17]["id"] = 15;
	$estado[17]["name"] = "edo_mexico";
	$estado[18]["id"] = 18;
	$estado[18]["name"] = "nayarit";
	$estado[19]["id"] = 19;
	$estado[19]["name"] = "nuevo_leon";
	$estado[20]["id"] = 20;
	$estado[20]["name"] = "oaxaca";
	$estado[21]["id"] = 21;
	$estado[21]["name"] = "puebla";
	$estado[22]["id"] = 22;
	$estado[22]["name"] = "queretaro";
	$estado[23]["id"] = 23;
	$estado[23]["name"] = "quintana_roo";
	$estado[24]["id"] = 24;
	$estado[24]["name"] = "san_luis_potosi";
	$estado[25]["id"] = 25;
	$estado[25]["name"] = "sinaloa";
	$estado[26]["id"] = 26;
	$estado[26]["name"] = "sonora";
	$estado[27]["id"] = 27;
	$estado[27]["name"] = "tabasco";
	$estado[28]["id"] = 28;
	$estado[28]["name"] = "tamaulipas";
	$estado[29]["id"] = 29;
	$estado[29]["name"] = "tlaxcala";
	$estado[30]["id"] = 30;
	$estado[30]["name"] = "veracruz";
	$estado[31]["id"] = 31;
	$estado[31]["name"] = "yucatan";
	$estado[32]["id"] = 32;
	$estado[32]["name"] = "zacatecas";

	for( $est = 1; $est < 33; $est++ ){

		if( ( $gestor = fopen( $estado[$est]["name"] . ".csv", "r" ) ) !== FALSE ){
			
			while( ( $datos = fgetcsv( $gestor, 1000, "," ) ) !== FALSE ){
				
				if( $fila > 0 ){

					#Buscar id municipio
					$municipio_name = $datos[3];
					$sql_search_municipio = "SELECT * FROM municipio where municipio_name = '".$municipio_name."' and estado_id = ".$estado[$est]["id"]." ";
					$search_execute_municipio = mysql_query( $sql_search_municipio, $connect );
					$search_result_municipio = mysql_fetch_array( $search_execute_municipio );

					$municipio = $search_result_municipio["municipio_id"];
					$colonia = utf8_decode( $datos[1] );
					$tipo_asentamiento = utf8_decode( $datos[2] );
					$ciudad = utf8_decode( $datos[5] );
					$cp = utf8_decode( $datos[6] );
					$code = $datos[0];
					$encriptado = md5( $colonia . date( "YmdHis" ) );

					#$sql_search = "SELECT * FROM municipio where municipio_name = '".$municipio."' and estado_id = ".$estado[$est]["id"]." ";
					$sql_search = "SELECT * FROM codigo_postal where codigoPostal_colonia = '".$colonia."' and municipio_id = ".$municipio." ";
					
					$search_execute = mysql_query( $sql_search, $connect );
					$search_result = mysql_num_rows( $search_execute );
					
					if( $search_result == 0 && !empty( $colonia ) ){

						#$sql = "INSERT INTO `municipio` (`estado_id`, `municipio_name`, `municipio_encrypted` ) VALUES ('".$estado[$est]["id"]."', '".$municipio."', '".$encriptado."')";
						$sql = "INSERT INTO `codigo_postal` (`municipio_id`, `codigoPostal_colonia`, `codigoPostal_encrypted`, codigoPostal_code, codigoPostal_tipoAsentamiento, codigoPostal_ciudad, codigoPostal_cp ) VALUES ('".$municipio."', '".$colonia."', '".$encriptado."', '".$code."', '".$tipo_asentamiento."', '".$ciudad."', '".$cp."' )";

						$result = mysql_query( $sql );

						if( $result ){

							echo 'Municipio Insertado => ' . $colonia . '<br>';
						}
					}
				}

				$fila++;
			}
			fclose($gestor);
		}
	}
	?>
</body>
</html>