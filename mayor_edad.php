<?
$fechanacimiento = '1990-05-13';

list($ano,$mes,$dia) = explode("-",$fechanacimiento);
$ano_diferencia  = date("Y") - $ano;
$mes_diferencia = date("m") - $mes;
$dia_diferencia   = date("d") - $dia;

if($dia_diferencia < 0 || $mes_diferencia < 0){

	$ano_diferencia--;
}

echo $ano_diferencia;