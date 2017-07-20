<?
print_r( $_FILES["archivo"] );
if( !empty( $_FILES["archivo"] ) ){

	$name_file = "archivos/archivo_" . date( "YmdHis" ) . ".html";
	move_uploaded_file( $_FILES["archivo"]["tmp_name"], $name_file );

	Header( "Location:" . $name_file );
}
?>