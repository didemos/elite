<?php
include $_SERVER['DOCUMENT_ROOT'] . '/elite/includes/db.inc.php';
$statname = ($_GET['statname']);
$goods_name = ($_GET['good']);

//form call to query for trade good prices @ given station
if (isset($_GET['station_goods']))
	{
	header ('Location: /elite/select/index.php');
	exit();
	}

//form call to insert trade good data to existing station
if (isset ($_GET['insert_data']))
{    
	include 'form.html.php';
	exit();
}

//SQL query to insert trade good data to existing station

if (isset($_POST['statname']))
{
	$statname = ($_POST['statname']);
	
	try
	{
		$sql = 'INSERT INTO commo SET
		station_id = (SELECT station_id FROM stations WHERE station_name = "'.($_POST["statname"]).'"),
		goods_id = (SELECT goods_id FROM station_goods WHERE goods_name = "'.($_POST['good']).'"),
		sell_price = :sell_price,
		demand_value = :demval,
		buy_price = :buy_price,
		supply_value = :supval';  
		$s =$pdo->prepare($sql);		
		$s->bindValue(':sell_price',$_POST['sell_price']);
		$s->bindValue(':demval', $_POST['demval']);
		$s->bindValue(':buy_price', $_POST['buy_price']);
		$s->bindValue(':supval', $_POST['supval']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$error = 'Cannot insert data into database:  ' .$e->getMessage();
		include 'error.html.php';
		exit();
	}
	
	header('Location: .');
	exit();
}

//calling form to insert new station data
if (isset ($_GET['new_station']))
{    
	include 'stat_form.html.php';
	exit();
}

//SQL query for insert of new station data 
if (isset($_POST['shipyard']))
{
	try
	{
		$sql = 'INSERT INTO stations SET
		system_name = :sysname,
		station_name = :statname,
		station_type = :stattype,
		faction = :faction,
		shipyard_offer = :shipyard'; 
		$s =$pdo->prepare($sql);	
		$s->bindValue(':sysname',$_POST['sysname']);		
		$s->bindValue(':statname',$_POST['statname']);
		$s->bindValue(':stattype', $_POST['stattype']);
		$s->bindValue(':faction', $_POST['faction']);
		$s->bindValue(':shipyard', $_POST['shipyard']);
		$s->execute();
	}
	catch (PDOexception $e)
	{
		$error = 'Cannot insert data into database:  ' .$e->getMessage();
		include 'error.html.php';
		exit();
	}
	header('Location: .');
	exit();
}


//SQL request for price of a good in given system
if (isset($_POST['good']))
{	
	$post = ($_POST['good']);
	$system = ($_POST['system']);
	try
	{
		$sql = 'SELECT system_name, station_name, sell_price, demand_value, buy_price, supply_value FROM commo INNER JOIN stations INNER JOIN station_goods ON stations.station_id = commo.station_id AND station_goods.goods_id = commo.goods_id WHERE commo.goods_id = (SELECT goods_id FROM station_goods WHERE goods_name = "'.$post.'")';
		$result = $pdo->query($sql);
	}
	catch (PDOexception $e)
	{
		$error = 'Cannot acess database:  ' .$e->getMessage();
		include 'error.html.php';
		exit ();
	}
}
else
{
	$post = 'explosives';
	$system = 'eostienses';
	try
	{
		$sql = 'SELECT system_name, station_name, sell_price, demand_value, buy_price, supply_value FROM commo INNER JOIN stations INNER JOIN station_goods ON stations.station_id = commo.station_id AND station_goods.goods_id = commo.goods_id WHERE commo.goods_id = (SELECT goods_id FROM station_goods WHERE goods_name = "'.$post.'")';
		$result = $pdo->query($sql);
	}
	catch (PDOexception $e)
	{
		$error = 'Cannot access database:  ' .$e->getMessage();
		include 'error.html.php';
		exit ();
	}	
}

//loop for main form
foreach ($result as $row)
{
	$goods [] = array(
	'sells' => $row['sell_price'], 
	'buys' => $row['buy_price'], 
	'sysnames' => $row['system_name'], 
	'statnames' => $row['station_name'], 
	'supvals' => $row['supply_value'], 
	'demvals' => $row['demand_value'] );
}

//calling main form
include 'main.html.php';
