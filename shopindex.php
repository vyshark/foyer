<?php
	session_start();
	$sid=$_SESSION['mysid'];
?>
<html>
	<head>
		<script src="jquery-3.1.0.js"></script>
		<style>
		#thefinale{
			height:100%;
			width:100%;
			border-style: dashed;
			
		}
		#thefinale td{
			text-align: center;
			border-style: dotted;
			
		}
		#thefinale th{
			font-size: 150%;
			color:#000000;
		}
		#greeting{
			position: relative;
			top:-40px;
		}
		#simon{
			position: absolute;
			top:20px;
			left: 20px;
			opacity: 0.5;
			transition: opacity ease-in-out 350ms;
		}
		#simon:hover{
			opacity:1;
		}
		#simontwin{
			font-size: 240%;
			position: absolute;
			top:-15px;
			left: -10px;
			
		}
		#lego{
			z-index:5;
			position: absolute;
			right: 30px;
			top:160px;
			padding: 30px;
			background-color: pink;
		}
		</style>
		<link rel="stylesheet" href="layout.css" />

		<script src="jquery-3.1.0.js"></script>
		<title>login page</title>
	</head>
	<body>
		
		<div id="lego">
		
			<input type="text" id="name" placeholder="UID">
			<input type="number" id="number" placeholder="Amount" style="width:80px">
				<input type="button" id="tempo" value="credit">
				<p id="thep"> </p>
		</div>		
			<div id="login_user">
				<div id="simon" class="nosel"><div id="simontwin"></div></div>
				
				<div id="login_select">
					<h2 id="greeting"> Hello <?php echo $_SESSION['mysid'] ?>
		, we hope the business is good.</h>
				</div>
				<p style="color: black;" id="welcome">
					Welcome to Foy<span style="color: white">E</span>r.&nbsp;&nbsp;   Feel free to explore.
				</p>
				<ul id="results">
<?php

$sid=$_SESSION['mysid'];
$theCon = oci_connect('myoracle', 'foreverpassword', 'babblefish/XE');
if (!$theCon) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$theQuery = oci_parse($theCon, "select uidno,val FROM studshop where shopid = :here");
oci_bind_by_name($theQuery,':here', $sid);

$r = oci_execute($theQuery);



echo "<table id='thefinale'>\n";
echo "<tr><th>UID</th><th>Balance</th></tr>";
while ($itter = oci_fetch_assoc($theQuery)) {
    echo "<tr>\n";
    foreach ($itter as $piece) {
        echo "    <td>" . ($piece !== null ? htmlentities($piece, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}

echo "</table>\n";

oci_free_statement($theQuery);
oci_close($theCon);

?>
				</ul>
			</div>


		</div>
<script>
		$(document).ready(function() {
			$('#tempo').click(function() {
		var ii =  <?php echo $sid ?>;
  		var q = $('#name').val();
			var numq = $('#number').val();
				$.post("upvalue.php",{ name:q ,number:numq ,iid:ii },function(stuff){

					$('#thep').prepend(stuff);
				})
			});
					$('#simon').click(function() {

							window.location='login.php';
									});
		});

	
</script>
	</body>
	</html>