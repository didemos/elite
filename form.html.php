<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Insert data form</title>
<style type="text/css">
body 
{
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: #FF8C00;
	background-image: url("images/space_texture.png");
	scrollbar-base-color: #ff4b02;
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
#input_header {
	font-size:180%;
	position:absolute;
	top:110px;
	left:380px;
	clear:both;
}
#input_text {
	font-size:130%;
	position:absolute;
	top:25%;
	float:left;
	left:20%;	
	
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
}


input {
	width:200px;
}
textarea {
	padding-top:0.5em;
	color:#FF8C00;
	margin-right:100px;
	width:208px;
	text-align:center;
	font-size:150%;
	background-color:#000000;
	border: 1px solid #ff4b02;
	resize: none;
}
h1 {
	font-size:3em;
	position:absolute;
	left:750px;
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
}
ul li a {
	display:block;
}
.fsSubmitButton
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
  margin-left:35px;
  margin-right:115px;
}
</style>
</head>
<body link="#C0C0C0" vlink="#FF8C00" alink="#FF0000"> 
	<div id="wrapper">
	
	
		<div id="header">
			<div id=links>
				<ul>
				<li class="links"><a href="?main_page">MAIN PAGE</a></li>
				<li class="links"><a href="?new_station">NEW STATION</a></li>
				</ul>
			</div>
			<div id="pasek">
				<h1><?php echo "$goods_name","@","$statname" ?></h1>
			</div>
		</div>
		
		
		<div id="content">		
			<form action="?" method="post">

			<div id="station_list">
			<select required name="statname" size="28">
			<option selected value="Parkinson Dock" <?php if ($statname=='Parkinson Dock') {echo 'selected="selected"'; } ?> >Parkinson Dock</option>
				<option value="Adam's Market"  <?php if ($statname=='Adam\'s Market') {echo 'selected="selected"'; } ?>>Adams Market</option>
				<option value="Saavedra Dock"  <?php if ($statname=='Saavedra Dock') {echo 'selected="selected"'; } ?> >Savaadra Dock</option>
				<option value="Helffrich station" <?php if ($statname=='Helffrich station') {echo 'selected="selected"'; } ?> >Helffrich station</option>
				<option value="Westphal Port"   <?php if ($statname=='Westphal Port') {echo 'selected="selected"'; } ?> >Westphal Port</option>
				<option value="Kowal Dock"     <?php if ($statname=='Kowal Dock') {echo 'selected="selected"'; } ?> >Kowal Dock</option>
				<option value="Jokester's Station" <?php if($statname=='Jokester\'s Station') {echo 'selected="selected"'; } ?> >Jokester's Station</option>
			</select>
			</div>
			<div id="good_list">
			<select required name="good" size="28" >
	  <optgroup label="CHEMICALS">
	  <option selected value="explosives">Explosives</option>
	  <option value="hydrogen fuel" >Hydrogen fuel</option>
	  <option value="mineral oil">Mineral oil</option>
	  <option value="pesticides">Pesticides</option>
	  </optgroup>
	  <optgroup label="CONSUMER ITEM">
	  <option value="clothing" >Clothing</option>
	  <option value="consumer technology" >Consumer technology</option>
	  <option value="domestic appliances" >Domestic appliances</option>
	  </optgroup>
	  <optgroup label="FOOD">
	  <option value="algae" >Algae</option>
	  <option value="animal meat" >Animal meat</option>
	  <option value="coffee" >Coffee</option>
	  <option value="fish" >Fish</option>
	  <option value="food cartridges" >Food cartridges</option>
	  <option value="fruit and vegetables" >Fruit and vegetables</option>
	  <option value="grain" >Grain</option>
	  <option value="synthetic meat" >Synthetic meat</option>
	  <option value="tea" >Tea</option>
	  </optgroup>
	  <optgroup label="INDUSTRIAL MATERIALS">
	  <option value="polymers" >Polymers</option>
	  <option value="semiconductors" >Semiconductors</option>
	  <option value="superconductors" >Superconductors</option>
	  </optgroup>
	  <optgroup label="LEGAL DRUGS">
	  <option value="beer" >Beer</option>
	  <option value="liquor" >Liquor</option>
	  <option value="narcotics" >Narcotics</option>
	  <option value="tobacco" >Tobacco</option>
	  <option value="wine" >Wine</option>
	  </optgroup>
	  <optgroup label="MACHINERY">
	  <option value="atmospheric processors" >Atmospheric processors</option>
	  <option value="crop harvesters"  >Crop harvesters</option>
	  <option value="marine equipment" >Marine equipment</option>
	  <option value="microbial furnaces" >Microbial furnaces</option>
	  <option value="mineral extractors" >Mineral extractors</option>
	  <option value="power generators" >Power generators</option>
	  <option value="water purifiers" >Water purifiers</option>
	  </optgroup>
	  <optgroup label="MEDICINE">
	  <option value="agri medicines" >Agri-medicines</option>
	  <option value="basic medicines" >Basic medicines</option>
	  <option value="combat stabilisers" >Combat stabilisers</option>
	  <option value="performance enchancers" >Performance enchancers</option>
	  <option value="progenitor cells" >Progenitor cells</option>
	  </optgroup>
	  <optgroup label="METALS">
	  <option value="aluminium" >Aluminium</option>
	  <option value="beryllium" >Beryllium</option>
	  <option value="cobalt" >Cobalt</option>
	  <option value="copper" >Copper</option>
	  <option value="gallium" >Gallium</option>
	  <option value="gold" >Gold</option>
	  <option value="indium" >Indium</option>
	  <option value="lithium" >Lithium</option>
	  <option value="osmium" >Osmium</option>
	  <option value="palladium" >Palladium</option>
	  <option value="platinum" >Platinum</option>
	  <option value="silver" >Silver</option>
	  <option value="tantalum" >Tantalum</option>
	  <option value="titanium" >Titanium</option>
	  <option value="uranium" >Uranium</option>
	  </optgroup>
	  <optgroup label="MINERALS">
	  <option value="bauxite" >Bauxite</option>
	  <option value="bertrandite" >Bertrandite</option>
	  <option value="coltan" >Coltan</option>
	  <option value="gallite" >Gallite</option>
	  <option value="indite" >Indite</option>
	  <option value="lepidolite" >Lepidolite</option>
	  <option value="painite" >Painite</option>
	  <option value="rutile" >Rutile</option>
	  <option value="uraninite" >Uraninite</option>
	  </optgroup>
	  <optgroup label="SALVAGE">
	  <option value="ai relics" >AI relics</option>
	  <option value="antiquities" >Antiquities</option>
	  <option value="sap 8 container" >Sap 8 container</option>
	  </optgroup>
	  <optgroup label="SLAVERY">
	  <option value="slaves" >Slaves</option>
	  <option value="imperial_slaves" >Imperial slaves</option>
	  </optgroup>
	  <optgroup label="TECHNOLOGY">
	  <option value="advanced catalysers" >Advanced catalysers</option>
	  <option value="animal monitors" >Animal monitors</option>
	  <option value="aquaponic systems" >Aquaponic systems</option>
	  <option value="auto fabricators" >Auto-fabricators</option>
	  <option value="bioreducing lichen" >Bioreducing lichen</option>
	  <option value="computer components" >Computer components</option>
	  <option value="h e suits" >H.E. suits</option>
	  <option value="land enrichment system" >Land enrichment system</option>
	  <option value="resonating separators" >Resonating separators</option>
	  <option value="robotics" >Robotics</option>
	  </optgroup>
	  <optgroup label="TEXTILES">
	  <option value="leather" >Leather</option>
	  <option value="natural_fabrics" >Natural fabrics</option>
	  <option value="synthetic fabrics" >Synthetic fabrics</option>
	  </optgroup>
	  <optgroup label="WASTE">
	  <option value="biowaste" >Biowaste</option>
	  <option value="chemical_waste" >Chemical waste</option>
	  <option value="scrap" >Scrap</option>
	  </optgroup>
	  <optgroup label="WEAPON">
	  <option value="non_lethal weapons" >Non-lethal weapons</option>
	  <option value="personal weapons" >Personal weapons</option>
	  <option value="reactive armour" >Reactive armour</option>
	  <option value="battle weapons" >Battle weapons</option>
			</optgroup>
			</select>
	 </div>
	  
<div id="input_header">
<ul>
	<li class="Span">SELL PRICE</li>
	<li class="Span">DEMAND VALUE</li>
	<li class="Span">BUY PRICE</li>
	<li class="Span">SUPPLY VALUE</li>
</ul>
</div>
	<div id=input_text>
	<textarea id="sell_price" name="sell_price" rows="1" cols="20"></textarea>
	<textarea id="demval" name="demval" rows="1" cols="20"></textarea>
	<textarea id="buy_price" name="buy_price" rows="1" cols="20"></textarea>
	<textarea id="supval" name="supval" rows="1" cols="20"></textarea>
	</div>

</div>
</div>
		
	<div id="footer">
			<div id=submit>
<input class="fsSubmitButton" type="submit" value="Dodaj dane">
</div>
</form>
	</div>
</body>
</html>
