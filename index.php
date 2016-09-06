<?php 
session_start();
?>
<html>
	<head>
		<script src="jquery-3.1.0.js"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>
		<link rel="stylesheet" href="layout.css"/>
	</head>
	<body>
		
		<div id="page" class="nosel">
			<!--<div id="Orders">
				
			</div>-->
			<div id="header" class="nosel">

				<div id="fixed">
					<div id='tiny'>
						FOY<span>E</span>R
					</div>
				</div>
				<div id="img">
					
				</div>

				<div id="h11">
					<h1>FOY<span>E</span>R</h1>
				</div>

				<div id="upperbutton" class="options">
					<ul>
						<li>
							<?php echo $_SESSION['myuid']; ?>
						</li>
						<li id="done">
							logout
						</li>
					</ul>
				</div>

			</div>

			<div id="content">

				<div id="boxes">

<img src="FinalLayoutPic.jpg" alt="Layout" usemap="#planetmap" height="790px" width="1240px">
<map name="planetmap" id="myMap">

<area shape="rect" coords="10,0,240,75" alt="Anna" id="map_anna" title="Anna">

<area shape="rect" coords="350,0,620,75" alt="Drinks" id="map_beverages" title="Drinks">

<area shape="rect" coords="700,0,980,75" alt="Dinner" id="map_juice" title="Juice">

<area shape="rect" coords="1020,0,1240,75" alt="Dinner" id="map_indian" title="Indian">

<area shape="rect" coords="860,120,990,160" alt="Dinner" id="map_bakery" title="Bakery">

<area shape="rect" coords="590,340,720,410" alt="Dinner" id="map_chaat" title="Chaat">

<area shape="rect" coords="1175,190,1240,450" alt="Dinner" id="map_chinese" title="Chinese">

<area shape="rect" coords="1175,460,1240,750" alt="Dinner" id="map_frankie" title="Frankie">

<area shape="rect" coords="590,460,720,750" alt="Dinner" id="map_sandwich" title="Sandwhich">

<area shape="rect" coords="590,200,660,300" alt="Dinner" id="map_pizza" title="Pizza">
</map>
<div id="thedude">  
<!--85 571-->
	<form name="A" method="post" action="display.php" onSubmit="k()">
<table id="Annas" class="hidden">
	<caption> Annas </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Veg. Meal </td>
		<td> 50 </td>
		<td> <input id="q1" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(1,'Veg. Meal',50,(document.A.q1.value))"> </td>
	</tr>

	<tr>
		<td> Non-veg. Meal </td>
		<td> 50 </td>
		<td> <input id="q2" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(1,'Non-veg. Meal',50,(document.A.q2.value))"> </td>
	</tr>

	<tr>
		<td> French Toast </td>
		<td> 30 </td>
		<td> <input id="q3" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(1,'French Toast', 25,(document.A.q3.value))"> </td>
	</tr>

	<tr>
		<td> Garlic Toast </td>
		<td> 22 </td>
		<td> <input id="q4" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(1,'Garlic Toast', 22,(document.A.q4.value))"> </td>
	</tr>


	<tr>
		<td> Special Maggi </td>
		<td> 30 </td>
		<td> <input id="q5" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(1,'Special Maggi', 30,(document.A.q5.value))"> </td>
	</tr>
	<tr>
		<td> 1 </td>
		<td> Total </td>
		<td><input type="text" name="Anna" id="A"></td>
		<td></td>
	</tr>
</table>	

<table id="Bakery" class="hidden">
	<caption> Bakery </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Paneer Tikka Croissant </td>
		<td> 40 </td>
		<td> <input id="q6" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(2, 'Paneer Tikka Croissant', 40, (document.A.q6.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Cheese Croissant </td>
		<td> 40 </td>
		<td> <input id="q7" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(2, 'Chicken Cheese Croissant', 40, (document.A.q7.value))"> </td>
	</tr>

	<tr>
		<td> Brownie </td>
		<td> 45 </td>
		<td> <input id="q8" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(2, 'Brownie', 45, (document.A.q8.value))"> </td>
	</tr>

	<tr>
		<td> Chocolate Chip Donut </td>
		<td> 30 </td>
		<td> <input id="q9" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(2, 'Chocolate Chip Donut', 30, (document.A.q9.value))"> </td>
	</tr>

	<tr>
		<td> Double Chocolate Donut </td>
		<td> 30 </td>
		<td> <input id="q10" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(2, 'Double Chocolate Donut', 30, (document.A.q10.value))"> </td>
	</tr>
    <tr>
		<td> 2 </td>
		<td> Total </td>
		<td><input type="text" name="Bakery" id="B"></td>
		<td></td>
	</tr>
</table>	

<table id="Beverages" class="hidden">
	<caption> Beverages </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Coffee </td>
		<td> 12 </td>
		<td> <input id="q11" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(3, 'Coffee', 12, (document.A.q11.value))"> </td>
	</tr>

	<tr>
		<td> Tea </td>
		<td> 12 </td>
		<td> <input id="q12" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(3, 'Tea', 12, (document.A.q12.value))"> </td>
	</tr>

	<tr>
		<td> Hot Chocolate </td>
		<td> 20 </td>
		<td> <input id="q13" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(3, 'Hot Chocolate', 20, (document.A.q13.value))"> </td>
	</tr>

	<tr>
		<td> Iced Tea </td>
		<td> 25 </td>
		<td> <input id="q14" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(3, 'Iced Tea', 25, (document.A.q14.value))"> </td>
	</tr>

	<tr>
		<td> Cold Coffee </td>
		<td> 30 </td>
		<td> <input id="q15" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(3, 'Cold Coffee', 30, (document.A.q15.value))"> </td>
	</tr>
    <tr>
		<td> 3 </td>
		<td> Total </td>
		<td><input type="text" name="Beverages" id="C"></td>
		<td></td>
	</tr>
</table>	

<table id="Chaat" class="hidden">
	<caption> Chaat </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Sev Puri </td>
		<td> 25 </td>
		<td> <input id="q16" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(4, 'Sev Puri', 25, (document.A.q16.value))"> </td>
	</tr>

	<tr>
		<td> Bhel </td>
		<td> 30 </td>
		<td> <input id="q17" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(4, 'Bhel', 30, (document.A.q17.value))"> </td>
	</tr>

	<tr>
		<td> Samosa Chaat </td>
		<td> 40 </td>
		<td> <input id="q18" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(4, 'Samosa Chaat', 40, (document.A.q18.value))"> </td>
	</tr>

	<tr>
		<td> Dahi Kachori </td>
		<td> 40 </td>
	<td> <input id="q19" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(4, 'Dahi Kachori', 40, (document.A.q19.value))"> </td>
	</tr>

	<tr>
		<td> Bhel Puri </td>
		<td> 30 </td>
		<td> <input id="q20" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(4, 'Bhel Puri', 30, (document.A.q20.value))"> </td>
	</tr>
    <tr>
		<td> 4 </td>
		<td> Total </td>
		<td><input type="text" name="Chaat" id="D"></td>
		<td></td>
	</tr>
</table>

<table id="Chinese" class="hidden">
	<caption> Chinese </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Veg. Plate </td>
		<td> 80 </td>
		<td> <input id="q21" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(5, 'Veg. Plate', 80, (document.A.q21.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Plate </td>
		<td> 90 </td>
		<td> <input id="q22" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(5, 'Chicken Plate', 90, (document.A.q22.value))"> </td>
	</tr>

	<tr>
		<td> Veg. Noodles with Manchurian </td>
		<td> 40 </td>
		<td> <input id="q23" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(5, 'Veg. Noodles with Manchurian', 40, (document.A.q23.value))"> </td>
	</tr>

	<tr>
		<td> Non-veg. Noodles with Manchurian </td>
		<td> 50 </td>
		<td> <input id="q24" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(5, 'Non-veg. Noodles with Manchurian', 50, (document.A.q24.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Cordon Bleu </td>
		<td> 90 </td>
		<td> <input id="q25" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(5, 'Chicken Cordon Bleu', 90, (document.A.q25.value))"> </td>
	</tr>
    <tr>
		<td> 5 </td>
		<td> Total </td>
		<td><input type="text" name="Chinese" id="E"></td>
		<td></td>
	</tr>
</table>	

<table id="Frankie" class="hidden">
	<caption> Frankie </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Veg. Frankie </td>
		<td> 35 </td>
		<td> <input id="q26" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(6, 'Veg. Frankie', 35, (document.A.q26.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Frankie </td>
		<td> 40 </td>
		<td> <input id="q27" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(6, 'Chicken Frankie', 40, (document.A.q27.value))"> </td>
	</tr>

	<tr>
		<td> Veg. Dragon Frankie </td>
		<td> 50 </td>
		<td> <input id="q28" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(6, 'Veg. Dragon Frankie', 50, (document.A.q28.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Dragon Frankie </td>
		<td> 55 </td>
		<td> <input id="q29" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(6, 'Chicken Dragon Frankie', 55, (document.A.q29.value))"> </td>
	</tr>

	<tr>
		<td> Cutlet Pav </td>
		<td> 20 </td>
		<td> <input id="q30" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(6, 'Cutlet Pav', 20, (document.A.q30.value))"> </td>
	</tr>
    <tr>
		<td> 6 </td>
		<td> Total </td>
		<td><input type="text" name="Frankie" id="F"></td>
		<td></td>
	</tr>
</table>

<table id="Indian" class="hidden">
	<caption> Indian </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Masala Dosa </td>
		<td> 40 </td>
		<td> <input id="q31" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(7, 'Masala Dosa', 40, (document.A.q31.value))"> </td>
	</tr>

	<tr>
		<td> Aalu Paratha </td>
		<td> 50 </td>
		<td> <input id="q32" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(7, 'Aalu Paratha', 50, (document.A.q32.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Paratha </td>
		<td> 50 </td>
		<td> <input id="q33" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(7, 'Chicken Paratha', 50, (document.A.q33.value))"> </td>
	</tr>

	<tr>
		<td> Idli Chilli </td>
		<td> 40 </td>
		<td> <input id="q34" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(7, 'Idli Chilli', 40, (document.A.q34.value))"> </td>
		
	</tr>

	<tr>
		<td> Chhole Bhatura </td>
		<td> 50 </td>
		<td> <input id="q35" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(7, 'Chhole Bhatura', 50, (document.A.q35.value))"> </td>
	</tr>
    <tr>
		<td> 7 </td>
		<td> Total </td>
		<td><input type="text" name="Indian" id="G"></td>
		<td></td>
	</tr>
</table>

<table id="Juice" class="hidden">
	<caption> Juice </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Neembu Paani </td>
		<td> 20 </td>
		<td> <input id="q36" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(8, 'Neembu Paani', 20, (document.A.q36.value))"> </td>
	</tr>

	<tr>
		<td> Chocolate Milkshake </td>
		<td> 30 </td>
		<td> <input id="q37" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(8, 'Chocolate Milkshake', 30, (document.A.q37.value))"> </td>
	</tr>

	<tr>
		<td> Oreo Shake </td>
		<td> 35 </td>
		<td> <input id="q38" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(8, 'Oreo Shake', 35, (document.A.q38.value))"> </td>
	</tr>

	<tr>
		<td> Coconut Water </td>
		<td> 25 </td>
		<td> <input id="q39" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(8, 'Coconut Water', 25, (document.A.q39.value))"> </td>
	</tr>

	<tr>
		<td> Banana Milkshake </td>
		<td> 30 </td>
		<td> <input id="q40" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(8, 'Banana Milkshake', 30, (document.A.q40.value))"> </td>
	</tr>
    <tr>
		<td> 8 </td>
		<td> Total </td>
		<td><input type="text" name="Drinks" id="H"></td>
		<td></td>
	</tr>
</table>	

<table id="Pizza" class="hidden">
	<caption> Pizza </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Veg. Pizza </td>
		<td> 32 </td>
		<td> <input id="q41" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(9, 'Veg. Pizza', 32, (document.A.q41.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Pizza </td>
		<td> 40 </td>
		<td> <input id="q42" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(9, 'Chicken Pizza', 40, (document.A.q42.value))"> </td>
	</tr>

	<tr>
		<td> Garlic Capsicum Pizza </td>
		<td> 35 </td>
		<td> <input id="q43" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(9, 'Garlic Capsicum Pizza', 35, (document.A.q43.value))"> </td>
	</tr>

	<tr>
		<td> Plain Cheese Pizza </td>
		<td> 30 </td>
		<td> <input id="q44" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(9, 'Plain Cheese Pizza', 30, (document.A.q44.value))"> </td>
	</tr>

	<tr>
		<td> Chicken Cheese Pizza </td>
		<td> 45 </td>
		<td> <input id="q45" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(9, 'Chicken Cheese Pizza', 45, (document.A.q45.value))"> </td>
	</tr>
    <tr>
		<td> 9 </td>
		<td> Total </td>
		<td><input type="text" name="Pizza" id="I"></td>
		<td></td>
	</tr>
</table>

<table id="Sandwich" class="hidden">
	<caption> Sandwich </caption>
	
	<tr>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
	</tr>

	<tr>
		<td> Veg. Sandwich </td>
		<td> 32 </td>
		<td> <input id="q46" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(10, 'Veg. Sandwich', 32, (document.J.q46.value))"> </td>
	</tr>

	<tr>
		<td> Garlic Capsicum Cheese Sandwich </td>
		<td> 35 </td>
		<td> <input id="q47" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(10, 'Garlic Capsicum Cheese Sandwich', 35, (document.A.q47.value))"> </td>
	</tr>

	<tr>
		<td> Salami Sandwich </td>
		<td> 40 </td>
		<td> <input id="q48" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(10, 'Salami Sandwich', 40, (document.A.q48.value))"> </td>
	</tr>

	<tr>
		<td> Luncheon Meat Sandwich </td>
		<td> 40 </td>
		<td> <input id="q49" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(10, 'Luncheon Meat Sandwich', 40, (document.A.q49.value))"> </td>
	</tr>

	<tr>
		<td> Cheese Toast Sandwich </td>
		<td> 30 </td>
		<td> <input id="q50" type="number"> </td>
		<td> <input type="button" value="Add To Order" onClick="addItem(10, 'Cheese Toast Sandwich', 30, (document.A.q50.value))"> </td>
	</tr>
    <tr>
		<td> 10 </td>
		<td> Total </td>
		<td><input type="text" name="Sandwhich" id="K"></td>
		<td></td>
	</tr>
</table>


	<table id="pay">
	<caption style="color: black"> Your Orders </caption>
	
	<tr>
		<th> Counter </th>
		<th> Dish </th>
		<th> Price(Rs.) </th>
		<th> Quantity </th>
		<th> Total </th>		
	</tr>

	<tr>
		<td> </td>
		<td> </td>
		<td> </td>
		<td><p id="para"> </p> </td>
		<td> <input type="text" name="s" id="s" style="display: none"> </td>
 	</tr>

</table>
	<input type="submit" onClick="k();" id="ball" value="&#8377;" style="font-size: 30px">
</form>

</div>

</div>
</div>
				</div>
			

			</div>

			<div id="ball">
				

			</div>
			
			<div id="overlay" class="nosel"></div>
		</div>

		<script>
			$(document).ready(function() {

				isScroll = false;

				$('#img').on('click', function() {
					//click events---------------------------------------------

					$('#upperbutton').toggleClass('appear');

				});

				$('#ball').on('click', function() {
					//
					//
					//payball
					//
					if ($('#payball').hasClass('orderin')) {

						$('#payball').animate({
							bottom : "-75%",
							opacity : "0"
							//$('#order').animate({bottom: "30px",opacity:"0"
						}, 350);
						$('#payball').removeClass('orderin');

					} else {
						$('#payball').css("bottom", "110px");
						$('#payball').css("opacity", "1");
						$('#payball').show().addClass('orderin');

					}
					//------pay--------------
					//
					//
					if ($('#pay').hasClass('payanimatein')) {

						$('#pay').animate({
							right : "-80%",
							opacity : "0"
							//$('#order').animate({bottom: "30px",opacity:"0"
						}, 350);
						$('#pay').removeClass('payanimatein');

					} else {
						$('#pay').css("right", "110px");
						$('#pay').css("opacity", "1");
						$('#pay').show().addClass('payanimatein');

					}

					$('#arrows').toggleClass('arrowrotate');

				});

				$(document).scroll(function() {
					//scroll events------------------------------

					var s1 = $(window).scrollTop();
					if (s1 > 352) {

						$('#fixed').addClass('fixshadow');
						//for moving div
						$('#ball').addClass('ballanimate');
						$('#ball').show();
						//ball

						$('#tiny').show(350);

						isScroll = true;

					} else {
						$('#fixed').removeClass('fixshadow');
						//for moving div
						$('#ball').removeClass('ballanimate');
						//$('#ball').hide(350);//ball
						if (isScroll) {
							$('#ball').animate({
								bottom : "-70px"
							}, 350);
							$('#ball').hide(1);
							$('#ball').animate({
								bottom : "30px"
							}, 350);
							/*if ($('#payball').hasClass('orderin')) {
								$('#payball').animate({
									bottom : "-75%",
									opacity : "0"

								}, 350);
								$('#payball').removeClass('orderin');
							}
							if ($('#pay').hasClass('payanimatein')) {
								$('#pay').animate({
									right : "-80%",
									opacity : "0"
								}, 350);
								$('#pay').removeClass('payanimatein');
							}*/

							isScroll = false;
						}

						$('#tiny').hide(250);

					}

				});
		 $('#myMap area').click( function () {
		 	
        var mapvars=$(this).attr('id');
       
       	if(mapvars==='map_anna'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//annas table unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_juice'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//juice unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_beverages'){
       		$('#Annas').removeClass('nothidden').addClass('hidden');//bevereges unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Beverages').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_pizza'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//pizza unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_sandwich'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//sandwich unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_indian'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//indian unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_chaat'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//chaat unhides
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Chaat').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_frankie'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//frankie unhides
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_chinese'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//chinese
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('hidden').addClass('nothidden');
       	}
       	
       		if(mapvars==='map_bakery'){
       		$('#Beverages').removeClass('nothidden').addClass('hidden');//bakery
       		$('#Chaat').removeClass('nothidden').addClass('hidden');
       		$('#Chinese').removeClass('nothidden').addClass('hidden');
       		$('#Frankie').removeClass('nothidden').addClass('hidden');
       		$('#Indian').removeClass('nothidden').addClass('hidden');
       		$('#Juice').removeClass('nothidden').addClass('hidden');
       		$('#Pizza').removeClass('nothidden').addClass('hidden');
       		$('#Sandwich').removeClass('nothidden').addClass('hidden');
       		$('#Annas').removeClass('nothidden').addClass('hidden');
       		$('#Bakery').removeClass('hidden').addClass('nothidden');
       	}
     
    });
			
		$('#done').click(function(){
  window.location = 'login.php';
});
});
		</script>
<script>
var t=parseInt('0');

function addItem(a,b,c,d)
{
	
var table= document.getElementById('pay');
var l= table.rows.length;
var row= table.insertRow(l-1);
var c1= row.insertCell(0);
var c2= row.insertCell(1);
var c3= row.insertCell(2);
var c4= row.insertCell(3);
var c5= row.insertCell(4);
c1.innerHTML= a;
c2.innerHTML= b;
c3.innerHTML= c;
c4.innerHTML= d;
c5.innerHTML= c*d;
t+=parseInt(c5.innerHTML);

document.getElementById('para').innerHTML=t;
document.getElementById('ball').style.backgroundColor="#E91E63";
document.getElementById('pay').style.display="block";

}
function k()
{
	document.getElementById('s').value=t;
	Anna();
	Bakery();
	C();
	D();
	E();
	F();
	G();
	H();
	I();
	K();
	
}
function Anna()
{
	var1=parseInt(document.getElementById('q1').value*50);
	var2=parseInt(document.getElementById('q2').value*50);
	var3=parseInt(document.getElementById('q3').value*30);
	var4=parseInt(document.getElementById('q4').value*22);
	var5=parseInt(document.getElementById('q5').value*30);
	document.getElementById('A').value=parseInt(var1+var2+var3+var4+var5);	
}
function Bakery()
{
	var1=parseInt(document.getElementById('q6').value*40);
	var2=parseInt(document.getElementById('q7').value*40);
	var3=parseInt(document.getElementById('q8').value*45);
	var4=parseInt(document.getElementById('q9').value*30);
	var5=parseInt(document.getElementById('q10').value*30);
	document.getElementById('B').value=parseInt(var1+var2+var3+var4+var5);	
}
function C()
{
	var1=parseInt(document.getElementById('q11').value*12);
	var2=parseInt(document.getElementById('q12').value*12);
	var3=parseInt(document.getElementById('q13').value*20);
	var4=parseInt(document.getElementById('q14').value*25);
	var5=parseInt(document.getElementById('q15').value*30);
	document.getElementById('C').value=parseInt(var1+var2+var3+var4+var5);	
}

function D()
{
	var1=parseInt(document.getElementById('q16').value*25);
	var2=parseInt(document.getElementById('q17').value*30);
	var3=parseInt(document.getElementById('q18').value*40);
	var4=parseInt(document.getElementById('q19').value*40);
	var5=parseInt(document.getElementById('q20').value*30);
	document.getElementById('D').value=parseInt(var1+var2+var3+var4+var5);	
}

function E()
{
	var1=parseInt(document.getElementById('q21').value*80);
	var2=parseInt(document.getElementById('q22').value*90);
	var3=parseInt(document.getElementById('q23').value*40);
	var4=parseInt(document.getElementById('q24').value*50);
	var5=parseInt(document.getElementById('q25').value*90);
	document.getElementById('E').value=parseInt(var1+var2+var3+var4+var5);	
}

function F()
{
	var1=parseInt(document.getElementById('q26').value*35);
	var2=parseInt(document.getElementById('q27').value*40);
	var3=parseInt(document.getElementById('q28').value*50);
	var4=parseInt(document.getElementById('q29').value*55);
	var5=parseInt(document.getElementById('q30').value*20);
	document.getElementById('F').value=parseInt(var1+var2+var3+var4+var5);	
}

function G()
{
	var1=parseInt(document.getElementById('q31').value*40);
	var2=parseInt(document.getElementById('q32').value*50);
	var3=parseInt(document.getElementById('q33').value*50);
	var4=parseInt(document.getElementById('q34').value*40);
	var5=parseInt(document.getElementById('q35').value*50);
	document.getElementById('G').value=parseInt(var1+var2+var3+var4+var5);	
}
function H()
{
	var1=parseInt(document.getElementById('q36').value*20);
	var2=parseInt(document.getElementById('q37').value*30);
	var3=parseInt(document.getElementById('q38').value*35);
	var4=parseInt(document.getElementById('q39').value*25);
	var5=parseInt(document.getElementById('q40').value*30);
	document.getElementById('H').value=parseInt(var1+var2+var3+var4+var5);	
}

function I()
{
	var1=parseInt(document.getElementById('q41').value*32);
	var2=parseInt(document.getElementById('q42').value*40);
	var3=parseInt(document.getElementById('q43').value*35);
	var4=parseInt(document.getElementById('q44').value*30);
	var5=parseInt(document.getElementById('q45').value*45);
	document.getElementById('I').value=parseInt(var1+var2+var3+var4+var5);	
}
function K()
{
	var1=parseInt(document.getElementById('q46').value*32);
	var2=parseInt(document.getElementById('q47').value*35);
	var3=parseInt(document.getElementById('q48').value*40);
	var4=parseInt(document.getElementById('q49').value*40);
	var5=parseInt(document.getElementById('q50').value*30);
	document.getElementById('K').value=parseInt(var1+var2+var3+var4+var5);	
}
/*function displayTotal(){

var table= document.getElementById('pay');
var l= table.rows.length;
var row= table.insertRow(l-1);
var c5= row.insertCell(4);
var x= t;
document.getElementById('para').innerHTML= x;
}*/

</script>

	</body>
</html>
