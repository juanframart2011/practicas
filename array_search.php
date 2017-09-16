<?
$schedule_available = array(

	"09:00:00",
	"09:31:00",
	"10:01:00",
	"10:31:00",
	"11:01:00",
	"11:31:00",
	"12:01:00",
	"12:31:00",
	"13:01:00",
	"13:31:00",
	"14:01:00",
	"14:31:00",
	"15:01:00",
	"15:31:00"
);

$hour = "2017-07-22 09:02:00";
$hour = explode( " ", $hour );
$hour = $hour[1];

#echo $hour;
#print_r( $schedule_available );
echo array_search( $hour, $schedule_available );

if( !in_array( $hour, $schedule_available ) ){

	echo "<br>No esta en el arreglo";
}
else{

	echo "<br>Si esta en el arreglo";
}