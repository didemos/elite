<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
	<title>Main Page</title>
	<script src="lib/jquery-1.11.3.min.js"></script>
	<style>
body 
{
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: #FF8C00;
	background-image: url("images/space_texture.png");
	opacity: 0.9;
} 

//WRAPPER

#wrapper {
	min-height: 100%;
	position: relative;
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.6);		
	background-image: url("images/stars.jpg");
}

#header {
    
	background-image: url("images/space_texture.png");
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.55);
	border-bottom: 1px solid #ff4b02;
    padding: 10px;
	top: 0;
    height: 100px;
    left: 0;
    position: absolute;
    width: 100%;
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 2.6);
}
#radioforge1{
	position:absolute;
	right:1.8%;
	top:25%;
}
#pasek {
	position:relative;
	bottom:18px;
}

#content {
	
}

#good_list {
	font-size:120%;
	position:absolute;
	top:120px;
	float:left;
	left:0;
}
#station_list {
	font-size:120%;
	top:120px;
	right: 0;
	position:absolute;
	float:right;
}

#output_header {
	font-size:180%;
	position:absolute;
	top:110px;
	left:380px;
	clear:both;
}

#output_text {
	font-size:150%;
	position:absolute;
	top:20%;
	float:left;
	left:16.5%;	
}
#submit {
	float:left;
	position:absolute;
	top:35%;
	left:45%;
}

#footer {
	
	background-image: url("images/space_texture.png");
    border-top: 1px solid #ff4b02;
    color: #FF8C00;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.6);
	background-color:#000000;
	bottom: 0;
    height: 100px;
    left: 0;
    position: absolute;
    width: 100%;
}

select {
	color:#FF8C00;
	background-image: url("images/space_texture.png");
	font-size:100%;
	text-shadow: 1px 1px 0 rgba(0, 0, 0, 2.6);
	border: 1px solid #ff4b02;
	width:280px;
	text-align:center;
	scrollbar-base-color: #ff4b02;
}
input {
	width:200px;
}

h1 {
	font-size:3em;
	position:absolute;
	left:35%;
}
th 
{
	text-align: center;
	background-color: #000000;
	display:block;
	margin:0;
	padding:0;
	width:230px;
	border: 1px solid #FF8C00;
	float:left;
}
td 
{
	padding:0.5em;
	color:#FF8C00;
	width:190px;
	text-align:center;
	font-size:130%;
	background-color:#000000;
	resize: none;
	border: 1px solid #FF8C00;
}
ul {
	list-style-type: none;
	margin:0;
	padding:0;
}
li {
	display:block;
	margin-top:30px;
	margin-right:53px;	
}
ul li {
	float:left;
	display:block;
}

.Button
{
	border:2px solid #FF8C00;
	border-radius: 100px;
	padding:10px 20px !important;
	font-size:14px !important;
	background-color:#000000;
	font-weight:	bold;
	color:#FF8C00;
}
.Span
{
  margin-left:10px;
  margin-right:83px;
}

</style>
  </head>
<body link="#C0C0C0" vlink="#FF8C00" alink="#FF0000">

	<div id="wrapper">
		<div id="header">
		
			<div id="pasek"><h1><?php echo "$post", "@", "$system" ?></h1></div>	 
		<div id="links">
			<ul>
			<li class="Button"><a href="?insert_data">DODAJ TOWAR</a></li>
			<li class="Button"><a href="?station_goods">CENY NA STACJACH</a></li>
			</ul>
			</div>
			</div>
			
		<div id="content">

			<div id="output_header">
	<ul>
    <li class="Span"> SYSTEM </li>
    <li class="Span">STATION</li>
	<li>SELL PRICE</li>
	<li>DEMAND VALUE</li>
	<li>BUY PRICE</li>
	<li>SUPPLY VALUE</li>
	</ul>
	</div>
	
			<div id="output_text" >
		<?php foreach ($goods as $good): 
		if ($good['sysnames'] == $system) {
			
		?>
		<table>
		<tr>
		<td><?php {echo ($good['sysnames']); } ?></td>
		<td><?php {echo ($good['statnames']);	} ?></td>
		<td><?php {echo ($good['sells']); } ?></td>
		<td><?php {echo ($good['demvals']); } ?></td>
		<td><?php {echo ($good['buys']);} ?></td>
		<td><?php {echo ($good['supvals']); } } ?></td>
		</tr>
		</table>
		<?php endforeach; ?>
	</div>

			<form action="/elite/index.php" method="post" >
			<div id="station_list">
			<select required name="system" size="28">
			<option value="Eotienses" <?php if ($system=='Eotienses') {echo 'selected="selected"'; } ?> >Eotienses</option>
			<option value="Kui Hsien" <?php if ($system=='Kui Hsien') {echo 'selected="selected"'; } ?> >Kui Hsien</option>
			<option value="Santupik" <?php if ($system=='Santupik') {echo 'selected="selected"'; } ?> >Santupik</option>
			<option value="Mictlan"  <?php if ($system=='Mictlan') {echo 'selected="selected"'; } ?> >Mictlan</option>
			<option value="LTT 911"  <?php if ($system=='LTT 911') {echo 'selected="selected"'; } ?> >LTT 911</option>
			</select>	
		</div>
			<div id="good_list">
			<select required name="good" size="28" >
	  <optgroup label="CHEMICALS">
	  <option value="explosives" onclick="location.href='unit_01.htm'"<?php if ($post=='explosives') {echo 'selected="selected"'; } ?> >Explosives</option>
	  <option value="hydrogen fuel" <?php if ($post=='hydrogen_fuel') {echo 'selected="selected"'; } ?> >Hydrogen fuel</option>
	  <option value="mineral oil" <?php if ($post=='mineral_oil') {echo 'selected="selected"'; } ?> >Mineral oil</option>
	  <option value="pesticides" <?php if ($post=='pesticides') {echo 'selected="selected"'; } ?> >Pesticides</option>
	  </optgroup>
	  <optgroup label="CONSUMER ITEM">
	  <option value="clothing" <?php if ($post=='clothing') {echo 'selected="selected"'; } ?> >Clothing</option>
	  <option value="consumer_technology" <?php if ($post=='consumer_technology') {echo 'selected="selected"'; } ?> >Consumer technology</option>
	  <option value="domestic appliances" <?php if ($post=='domestic_appliances') {echo 'selected="selected"'; } ?> >Domestic appliances</option>
	  </optgroup>
	  <optgroup label="FOOD">
	  <option value="algae" <?php if ($post=='algae') {echo 'selected="selected"'; } ?> >Algae</option>
	  <option value="animal meat" <?php if ($post=='animal_meat') {echo 'selected="selected"'; } ?> >Animal meat</option>
	  <option value="coffee" <?php if ($post=='coffee') {echo 'selected="selected"'; } ?> >Coffee</option>
	  <option value="fish" <?php if ($post=='fish') {echo 'selected="selected"'; } ?> >Fish</option>
	  <option value="food cartridges" <?php if ($post=='food_cartridges') {echo 'selected="selected"'; } ?> >Food cartridges</option>
	  <option value="fruit and vegetables" <?php if ($post=='fruit_and_vegetables') {echo 'selected="selected"'; } ?> >Fruit and vegetables</option>
	  <option value="grain" <?php if ($post=='grain') {echo 'selected="selected"'; } ?> >Grain</option>
	  <option value="synthetic meat" <?php if ($post=='synthetic_meat') {echo 'selected="selected"'; } ?> >Synthetic meat</option>
	  <option value="tea" <?php if ($post=='tea') {echo 'selected="selected"'; } ?> >Tea</option>
	  </optgroup>
	  <optgroup label="INDUSTRIAL MATERIALS">
	  <option value="polymers" <?php if ($post=='polymers') {echo 'selected="selected"'; } ?> >Polymers</option>
	  <option value="semiconductors" <?php if ($post=='semiconductors') {echo 'selected="selected"'; } ?> >Semiconductors</option>
	  <option value="superconductors" <?php if ($post=='superconductors') {echo 'selected="selected"'; } ?> >Superconductors</option>
	  </optgroup>
	  <optgroup label="LEGAL DRUGS">
	  <option value="beer" <?php if ($post=='beer') {echo 'selected="selected"'; } ?> >Beer</option>
	  <option value="liquor" <?php if ($post=='liquor') {echo 'selected="selected"'; } ?> >Liquor</option>
	  <option value="narcotics" <?php if ($post=='narcotics') {echo 'selected="selected"'; } ?> >Narcotics</option>
	  <option value="tobacco" <?php if ($post=='tobacco') {echo 'selected="selected"'; } ?> >Tobacco</option>
	  <option value="wine" <?php if ($post=='wine') {echo 'selected="selected"'; } ?> >Wine</option>
	  </optgroup>
	  <optgroup label="MACHINERY">
	  <option value="atmospheric processors" <?php if ($post=='atmospheric_processors') {echo "selected='selected'"; } ?> >Atmospheric processors</option>
	  <option value="crop harvesters" <?php if ($post=='crop_harvesters') {echo "selected='selected'"; } ?> >Crop harvesters</option>
	  <option value="marine equipment" <?php if ($post=='marine_equipment') {echo "selected='selected'"; } ?> >Marine equipment</option>
	  <option value="microbial furnaces" <?php if ($post=='microbial_furnaces') {echo "selected='selected'"; } ?> >Microbial furnaces</option>
	  <option value="mineral extractors" <?php if ($post=='mineral_extractors') {echo "selected='selected'"; } ?> >Mineral extractors</option>
	  <option value="power generators" <?php if ($post=='power_generators') {echo "selected='selected'"; } ?> >Power generators</option>
	  <option value="water purifiers" <?php if ($post=='water_purifiers') {echo "selected='selected'"; } ?> >Water purifiers</option>
	  </optgroup>
	  <optgroup label="MEDICINE">
	  <option value="agri-medicines" <?php if ($post=='agri-medicines') {echo 'selected="selected"'; } ?> >Agri-medicines</option>
	  <option value="basic medicines" <?php if ($post=='basic medicines') {echo 'selected="selected"'; } ?> >Basic medicines</option>
	  <option value="combat stabilisers" <?php if ($post=='combat stabilisers') {echo 'selected="selected"'; } ?> >Combat stabilisers</option>
	  <option value="performance enchancers" <?php if ($post=='performance enchancers') {echo 'selected="selected"'; } ?> >Performance enchancers</option>
	  <option value="progenitor cells" <?php if ($post=='progenitor_cells') {echo 'selected="selected"'; } ?> >Progenitor cells</option>
	  </optgroup>
	  <optgroup label="METALS">
	  <option value="aluminium" <?php if ($post=='aluminium') {echo "selected='selected'"; } ?> >Aluminium</option>
	  <option value="beryllium" <?php if ($post=='beryllium') {echo "selected='selected'"; } ?> >Beryllium</option>
	  <option value="cobalt" <?php if ($post=='cobalt') {echo "selected='selected'"; } ?> >Cobalt</option>
	  <option value="copper" <?php if ($post=='copper') {echo "selected='selected'"; } ?> >Copper</option>
	  <option value="gallium" <?php if ($post=='gallium') {echo "selected='selected'"; } ?> >Gallium</option>
	  <option value="gold" <?php if ($post=='gold') {echo "selected='selected'"; } ?> >Gold</option>
	  <option value="indium" <?php if ($post=='indium') {echo "selected='selected'"; } ?> >Indium</option>
	  <option value="lithium" <?php if ($post=='lithium') {echo "selected='selected'"; } ?> >Lithium</option>
	  <option value="osmium" <?php if ($post=='osmium') {echo "selected='selected'"; } ?> >Osmium</option>
	  <option value="palladium" <?php if ($post=='palladium') {echo "selected='selected'"; } ?> >Palladium</option>
	  <option value="platinum" <?php if ($post=='platinum') {echo "selected='selected'"; } ?> >Platinum</option>
	  <option value="silver" <?php if ($post=='silver') {echo "selected='selected'"; } ?> >Silver</option>
	  <option value="tantalum" <?php if ($post=='tantalum') {echo "selected='selected'"; } ?> >Tantalum</option>
	  <option value="titanium" <?php if ($post=='titanium') {echo "selected='selected'"; } ?> >Titanium</option>
	  <option value="uranium" <?php if ($post=='uranium') {echo "selected='selected'"; } ?> >Uranium</option>
	  </optgroup>
	  <optgroup label="MINERALS">
	  <option value="bauxite" <?php if ($post=='bauxite') {echo "selected='selected'"; } ?> >Bauxite</option>
	  <option value="bertrandite" <?php if ($post=='bertrandite') {echo "selected='selected'"; } ?> >Bertrandite</option>
	  <option value="coltan" <?php if ($post=='coltan') {echo "selected='selected'"; } ?> >Coltan</option>
	  <option value="gallite" <?php if ($post=='gallite') {echo "selected='selected'"; } ?> >Gallite</option>
	  <option value="indite" <?php if ($post=='indite') {echo "selected='selected'"; } ?> >Indite</option>
	  <option value="lepidolite" <?php if ($post=='lepidolite') {echo "selected='selected'"; } ?> >Lepidolite</option>
	  <option value="painite" <?php if ($post=='painite') {echo "selected='selected'"; } ?> >Painite</option>
	  <option value="rutile" <?php if ($post=='rutile') {echo "selected='selected'"; } ?> >Rutile</option>
	  <option value="uraninite" <?php if ($post=='uraninite') {echo "selected='selected'"; } ?> >Uraninite</option>
	  </optgroup>
	  <optgroup label="SALVAGE">
	  <option value="ai relics" <?php if ($post=='ai_relics') {echo "selected='selected'"; } ?> >AI relics</option>
	  <option value="antiquities" <?php if ($post=='antiquities') {echo "selected='selected'"; } ?> >Antiquities</option>
	  <option value="sap 8 container" <?php if ($post=='sap_8_container') {echo "selected='selected'"; } ?> >Sap 8 container</option>
	  </optgroup>
	  <optgroup label="SLAVERY">
	  <option value="slaves" <?php if ($post=='slaves') {echo "selected='selected'"; } ?> >Slaves</option>
	  <option value="imperial slaves" <?php if ($post=='imperial_slaves') {echo "selected='selected'"; } ?> >Imperial slaves</option>
	  </optgroup>
	  <optgroup label="TECHNOLOGY">
	  <option value="advanced catalysers" <?php if ($post=='advanced_catalysers') {echo "selected='selected'"; } ?> >Advanced catalysers</option>
	  <option value="animal monitors" <?php if ($post=='animal_monitors') {echo "selected='selected'"; } ?> >Animal monitors</option>
	  <option value="aquaponic systems" <?php if ($post=='aquaponic_systems') {echo "selected='selected'"; } ?> >Aquaponic systems</option>
	  <option value="auto fabricators" <?php if ($post=='auto_fabricators') {echo "selected='selected'"; } ?> >Auto-fabricators</option>
	  <option value="bioreducing lichen" <?php if ($post=='bioreducing_lichen') {echo "selected='selected'"; } ?> >Bioreducing lichen</option>
	  <option value="computer components" <?php if ($post=='computer_components') {echo "selected='selected'"; } ?> >Computer components</option>
	  <option value="h e suits" <?php if ($post=='h_e_suits') {echo "selected='selected'"; } ?> >H.E. suits</option>
	  <option value="land enrichment system" <?php if ($post=='land_enrichment_system') {echo "selected='selected'"; } ?> >Land enrichment system</option>
	  <option value="resonating separators" <?php if ($post=='resonating_separators') {echo "selected='selected'"; } ?> >Resonating separators</option>
	  <option value="robotics" <?php if ($post=='robotics') {echo "selected='selected'"; } ?> >Robotics</option>
	  </optgroup>
	  <optgroup label="TEXTILES">
	  <option value="leather" <?php if ($post=='leather') {echo "selected='selected'"; } ?> >Leather</option>
	  <option value="natural fabrics" <?php if ($post=='natural_fabrics') {echo "selected='selected'"; } ?> >Natural fabrics</option>
	  <option value="synthetic fabrics" <?php if ($post=='synthetic_fabrics') {echo "selected='selected'"; } ?> >Synthetic fabrics</option>
	  </optgroup>
	  <optgroup label="WASTE">
	  <option value="biowaste" <?php if ($post=='biowaste') {echo "selected='selected'"; } ?> >Biowaste</option>
	  <option value="chemical waste" <?php if ($post=='chemical_waste') {echo "selected='selected'"; } ?> >Chemical waste</option>
	  <option value="scrap" <?php if ($post=='scrap') {echo "selected='selected'"; } ?> >Scrap</option>
	  </optgroup>
	  <optgroup label="WEAPON">
	  <option value="non lethal weapons" <?php if ($post=='non_lethal_weapons') {echo "selected='selected'"; } ?> >Non-lethal weapons</option>
	  <option value="personal weapons" <?php if ($post=='personal_weapons') {echo "selected='selected'"; } ?> >Personal weapons</option>
	  <option value="reactive armour" <?php if ($post=='reactive_armour') {echo "selected='selected'"; } ?> >Reactive armour</option>
	  <option value="battle weapons" <?php if ($post=='battle_weapons') {echo "selected='selected'"; } ?> >Battle weapons</option>
	  </optgroup>
	  </select>
			</div>
	
		</div>
		<div id="footer">
				<div id="submit">
	  <input class="Button" type="submit" value="SUBMIT" >
	  </div>
			</form>	
	</div>

	</div>	
</body>
</html>
