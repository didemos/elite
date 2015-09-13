<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title> "Station Goods"</title>
<style>
body 
{
	font-family: Euphemia;
	color: #FF8C00;
	background-image: url(/elite/images/galaxy.jpg);
}
th 
{
		text-align: center;
		background-color: #000000;
		font-size: 180%;
		position:relative;
		left:390px;
		top:-40px;
		display:block;
		margin:0;
		padding:0;
		width:230px;
		border: 1px solid #FF8C00;
		float:left;
}
td 
{
		text-align: center;
		font-size: 130%;
		background-color: #000000;
		position:relative;
		left:390px;
		top:-40px;
		display:block;
		margin:0;
		padding:0;
		width:230px;
		float:left;
}
#station_name
	{
		font-family: Courier new;
		text-align: center;
		background-color: #000000;
		font-size: 200%;
		position:relative;
		left:725px;
		top:50px;
		display:block;
		margin:0;
		width:450px;
		border: 1px solid #FF8C00;
	}	
#control a   {
		color:#FF8C00;
	}	
</style>
</head>
<body>
<div id=station_name>
<?php echo "$station" ?>
</div>

<div id="control">
<p><a href="?main">Strona glowna</a></p>
</div>

<form action="/elite/select/index.php" method="post" >
	<select required name="station_goods">
	<option value="Parkinson Dock" <?php if ($station=='Parkinson Dock') {echo 'selected="selected"'; } ?> >Parkinson Dock</option>
	<option value="Adam's Market"  <?php if ($station=='Adam\'s Market') {echo 'selected="selected"'; } ?>>Adams Market</option>
	<option value="Saavedra Dock"  <?php if ($station=='Saavedra Dock') {echo 'selected="selected"'; } ?> >Savaadra Dock</option>
	<option value="Helffrich station" <?php if ($station=='Helffrich station') {echo 'selected="selected"'; } ?> >Helffrich station</option>
	<option value="Westphal Port"   <?php if ($station=='Westphal Port') {echo 'selected="selected"'; } ?> >Westphal Port</option>
	<option value="Kowal Dock"     <?php if ($station=='Kowal Dock') {echo 'selected="selected"'; } ?> >Kowal Dock</option>
	<option value="Jokester's Station" <?php if ($station=='Jokester\'s Station') {echo 'selected="selected"'; } ?> >Jokester's Station</option>
	</select><br><br>	
<br>
<br>
	<input type="submit" value="Wyślij zapytanie" >
	</div>
	</form>
<table>
<tr>
    <th>GOOD NAME</th>
	<th>SELL PRICE</th>
	<th>DEMAND VALUE</th>
	<th>BUY PRICE</th>
	<th>SUPPLY VALUE</th>
</tr>
<?php foreach ($goods as $good): ?>
<tr>
<td><?php echo ($good['goodname']); ?></td>
<td><?php echo ($good['sells']); ?></td>
<td><?php echo ($good['demvals']); ?></td>
<td><?php echo ($good['buys']); ?></td>
<td><?php echo ($good['supvals']); ?></td>
</tr>
<?php endforeach; ?>
	  
	</body>

</html>
