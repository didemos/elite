<?php
include $_SERVER['DOCUMENT_ROOT'] . '/elite/includes/db.inc.php';

if (isset($_GET['main']))
	{
	header ('Location: /elite/index.php');
	exit();
	}

if (isset($_POST['station_goods']))
{
  $station = ($_POST['station_goods']);	
	
	try
	{
	$sql = 'SELECT goods_name, sell_price, demand_value, buy_price, supply_value FROM commo INNER JOIN stations INNER JOIN station_goods ON stations.station_id = commo.station_id AND station_goods.goods_id = commo.goods_id WHERE stations.station_id = commo.station_id 
	AND stations.station_id = (SELECT station_id FROM stations WHERE station_name = "'.$station.'")';
	$station_result = $pdo->query($sql);	
	}
	
catch (PDOexception $e)
	{
		$error = 'Nie można nawiązać połączenia z bazą danych:  ' .$e->getMessage();
		include 'error.html.php';
		exit ();
	}
}
	else
{
	$station = 'Parkinson Dock';
	{
	$sql = 'SELECT goods_name, sell_price, demand_value, buy_price, supply_value FROM commo INNER JOIN stations INNER JOIN station_goods ON stations.station_id = commo.station_id AND station_goods.goods_id = commo.goods_id WHERE stations.station_id = commo.station_id 
	AND stations.station_id = (SELECT station_id FROM stations WHERE station_name = "'.$station.'")';
	$station_result = $pdo->query($sql);	
	}
	
}
foreach ($station_result as $row)
	{
	$goods [] = array(
	'goodname' => $row['goods_name'], 
	'sells' => $row['sell_price'], 
	'demvals' => $row['demand_value'], 
	'buys' => $row['buy_price'], 
 	'supvals' => $row['supply_value'], 
	);
	}
include 'station_goods.html.php';
