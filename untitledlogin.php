<?php

		$theCon = oci_connect('myoracle', 'foreverpassword', 'babblefish/XE');
if (!$theCon) {
    $er = oci_error();
    trigger_error(htmlentities($er['message'], ENT_QUOTES), E_USER_ERROR);
}


$theQuery = oci_parse($theCon, "select validstudent(:here,:there) as anay from dual");
oci_bind_by_name($theQuery,':here', $_POST["txt_uname"]);
oci_bind_by_name($theQuery,':there', $_POST["txt_upassword"]);
$res=oci_execute($theQuery);


while (oci_fetch($theQuery)) {
    $var=oci_result($theQuery, 'ANAY');
   
}
if(is_null($var)){

	echo "Invalid username or password....redirecting";
	header("Location:login.php");
	
}
if($var==$_POST["txt_uname"]){
//	header("Location:index.php?ovar=$var");
	session_start();
	$_SESSION['myuid']=$_POST["txt_uname"];
	header("Location:index.php");
}
?>
