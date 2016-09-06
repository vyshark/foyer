<?php
	if((isset($_POST['name']))and(isset($_POST['number']))){
		$uid=$_POST['name'];
		$iid=$_POST['iid'];
		$amt=$_POST['number'];
		
		
		
		$theCon = oci_connect('myoracle', 'foreverpassword', 'babblefish/XE');
if (!$theCon) {
    $er = oci_error();
    trigger_error(htmlentities($er['message'], ENT_QUOTES), E_USER_ERROR);
}


$theQuery1 = oci_parse($theCon, "call up_val(:here,:there,:harry)");
oci_bind_by_name($theQuery1,':here', $uid);
oci_bind_by_name($theQuery1,':there', $iid);
oci_bind_by_name($theQuery1,':harry', $amt);
$res=oci_execute($theQuery1);
	
	echo "Uid&nbsp;&nbsp;" . $uid . "&nbsp;&nbsp;credited with &#8377;" . $amt . "<br>";
		
	}
?>