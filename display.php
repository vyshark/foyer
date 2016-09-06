<html>
	<head> 
	<script src="jquery-3.1.0.js"></script>	

	<style>
	h1{	
			display: block;
	font-size: 20px;
	letter-spacing: 4px;
	
	}
	body{
		background-color: #00BFA5;
		color:#FFFFFF;
	}
		li{
			margin-right: 40px;
			line-height:1.2em;
			display: inline-block;
			background-color: #009688;
			padding: 10px 30px 10px 30px;
			text-decoration: none;
			transition: box-shadow 350ms ease-in-out;
			
		}
		li:hover{
	-webkit-box-shadow: 0px 9px 33px 2px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 9px 33px 2px rgba(0,0,0,0.3);
	box-shadow: 0px 9px 33px 2px rgba(0,0,0,0.3);
		}
		ul{
				cursor: default;
	-moz-user-select: none;
	-webkit-user-select: none;
						position:absolute;
			top:10px;
			left:40%;
			bottom:auto;
			right:auto;
			
		}
		#thefinale2{
			height:100%;
			width:100%;
			border-style: dashed;
			
		}
		#thefinale2 td{
			text-align: center;
			border-style: dotted;
			
		}
		#thefinale2 th{
			font-size: 150%;
			color:#000000;
		}
	</style>
	</head>
<body>
	
<?php
	session_start();
	echo "please wait...";
	$uid=$_SESSION['myuid'];
	$total=$_POST['s'];
	$anna=$_POST['Anna'];
	$bakery=$_POST['Bakery'];
	$beverages=$_POST['Beverages'];
	$chaat=$_POST['Chaat'];
	$chinese=$_POST['Chinese'];
	$frankie=$_POST['Frankie'];
	$indian=$_POST['Indian'];
	$drinks=$_POST['Drinks'];
	$pizza=$_POST['Pizza'];
	$sandwhich=$_POST['Sandwhich'];
	$t1=1;$t2=2;$t3=3;$t4=4;$t5=5;$t6=6;$t7=7;$t8=8;$t9=9;$t10=10;

	$theCon = oci_connect('myoracle', 'foreverpassword', 'babblefish/XE');
if (!$theCon) {
    $er = oci_error();
    trigger_error(htmlentities($er['message'], ENT_QUOTES), E_USER_ERROR);
}


$theQuery1 = oci_parse($theCon, "call down_val(:tom,:dude,:harry)");
oci_bind_by_name($theQuery1, ':tom', $uid);
oci_bind_by_name($theQuery1, ':dude', $t1);
oci_bind_by_name($theQuery1, ':harry', $anna);
$res1=oci_execute($theQuery1);

oci_free_statement($theQuery1);

$theQuery2 = oci_parse($theCon, "call down_val(:tom1,:dude1,:harry1)");
oci_bind_by_name($theQuery2, ':tom1', $uid);
oci_bind_by_name($theQuery2, ':dude1', $t2);
oci_bind_by_name($theQuery2, ':harry1', $bakery);
$res2=oci_execute($theQuery2);

oci_free_statement($theQuery2);

$theQuery3 = oci_parse($theCon, "call down_val(:tom2,:dude2,:harry2)");
oci_bind_by_name($theQuery3, ':tom2', $uid);
oci_bind_by_name($theQuery3, ':dude2', $t3);
oci_bind_by_name($theQuery3, ':harry2', $beverages);
$res3=oci_execute($theQuery3);

oci_free_statement($theQuery3);

$theQuery4 = oci_parse($theCon, "call down_val(:tom3,:dude3,:harry3)");
oci_bind_by_name($theQuery4, ':tom3', $uid);
oci_bind_by_name($theQuery4, ':dude3', $t4);
oci_bind_by_name($theQuery4, ':harry3', $indian);
$res4=oci_execute($theQuery4);

oci_free_statement($theQuery4);

$theQuery5 = oci_parse($theCon, "call down_val(:tom4,:dude4,:harry4)");
oci_bind_by_name($theQuery5, ':tom4', $uid);
oci_bind_by_name($theQuery5, ':dude4', $t5);
oci_bind_by_name($theQuery5, ':harry4', $chaat);
$res5=oci_execute($theQuery5);

oci_free_statement($theQuery5);

$theQuery6 = oci_parse($theCon, "call down_val(:tom5,:dude5,:harry5)");
oci_bind_by_name($theQuery6, ':tom5', $uid);
oci_bind_by_name($theQuery6, ':dude5', $t6);
oci_bind_by_name($theQuery6, ':harry5', $chinese);
$res6=oci_execute($theQuery6);

oci_free_statement($theQuery6);

$theQuery7 = oci_parse($theCon, "call down_val(:tom6,:dude6,:harry6)");
oci_bind_by_name($theQuery7, ':tom6', $uid);
oci_bind_by_name($theQuery7, ':dude6', $t7);
oci_bind_by_name($theQuery7, ':harry6', $drinks);
$res7=oci_execute($theQuery7);

oci_free_statement($theQuery7);

$theQuery8 = oci_parse($theCon, "call down_val(:tom7,:dude7,:harry7)");
oci_bind_by_name($theQuery8, ':tom7', $uid);
oci_bind_by_name($theQuery8, ':dude7', $t8);
oci_bind_by_name($theQuery8, ':harry7', $frankie);
$res8=oci_execute($theQuery8);

oci_free_statement($theQuery8);

$theQuery9 = oci_parse($theCon, "call down_val(:tom8,:dude8,:harry8)");
oci_bind_by_name($theQuery9, ':tom8', $uid);
oci_bind_by_name($theQuery9, ':dude8', $t9);
oci_bind_by_name($theQuery9, ':harry8', $pizza);
$res9=oci_execute($theQuery9);

oci_free_statement($theQuery9);

$theQuery10 = oci_parse($theCon, "call down_val(:tom9,:dude9,:harry9)");
oci_bind_by_name($theQuery10, ':tom9', $uid);
oci_bind_by_name($theQuery10, ':dude9', $t10);
oci_bind_by_name($theQuery10, ':harry9', $sandwhich);
$res10=oci_execute($theQuery10);
if($res10){
	echo "<h1>Your order is placed. thank you.</h1><br>";

	oci_free_statement($theQuery10);
	$theQuery11 = oci_parse($theCon, "select s.shopn,t.val from shopl s, studshop t where uidno=:tom10 and t.shopid=s.shopid");
	oci_bind_by_name($theQuery11, ':tom10', $uid);
	$res11=oci_execute($theQuery11);
	
	echo "<table id='thefinale2'>\n";
echo "<tr><th>Shop ID</th><th>TAB</th></tr>";
while ($itter = oci_fetch_assoc($theQuery11)) {
    echo "<tr>\n";
    foreach ($itter as $piece) {
        echo "    <td>" . ($piece !== null ? htmlentities($piece, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}

echo "</table>\n";
	echo "<h1 align='center'>Dont be negative. Keep TABs in check.</h1>\n";
oci_free_statement($theQuery11);
oci_close($theCon);
	
	
}
?>

<ul>
	<li id="log">LOGOUT</li>
	<li id="ord">ORDER MORE</li>
</ul>

<script>
		$(document).ready(function() {
	$('#log').click(function() {
		window.location = 'login.php';
		});
		$('#ord').click(function() {
			window.location = 'index.php';
			});
	});
</script>

</body>
</html>