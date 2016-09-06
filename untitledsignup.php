<?php

		$theCon = oci_connect('myoracle', 'foreverpassword', 'babblefish/XE');
if (!$theCon) {
    $er = oci_error();
    trigger_error(htmlentities($er['message'], ENT_QUOTES), E_USER_ERROR);
}


$theQuery = oci_parse($theCon, "insert into studentl values(:here,:there)");
oci_bind_by_name($theQuery,':here', $_POST["txt_sname"]);
oci_bind_by_name($theQuery,':there', $_POST["txt_spassword"]);
$res=oci_execute($theQuery);

oci_free_statement($theQuery);

$theQuery1 = oci_parse($theCon, "insert into studshop values(:here1,1,0)");
oci_bind_by_name($theQuery1,':here1', $_POST["txt_sname"]);
$res1=oci_execute($theQuery1);

oci_free_statement($theQuery1);

$theQuery2 = oci_parse($theCon, "insert into studshop values(:here2,2,0)");
oci_bind_by_name($theQuery2,':here2', $_POST["txt_sname"]);
$res2=oci_execute($theQuery2);

oci_free_statement($theQuery2);

$theQuery3 = oci_parse($theCon, "insert into studshop values(:here3,3,0)");
oci_bind_by_name($theQuery3,':here3', $_POST["txt_sname"]);
$res3=oci_execute($theQuery3);

oci_free_statement($theQuery3);

$theQuery4 = oci_parse($theCon, "insert into studshop values(:here4,4,0)");
oci_bind_by_name($theQuery4,':here4', $_POST["txt_sname"]);
$res4=oci_execute($theQuery4);

oci_free_statement($theQuery4);

$theQuery5 = oci_parse($theCon, "insert into studshop values(:here5,5,0)");
oci_bind_by_name($theQuery5,':here5', $_POST["txt_sname"]);
$res5=oci_execute($theQuery5);

oci_free_statement($theQuery5);

$theQuery6 = oci_parse($theCon, "insert into studshop values(:here6,6,0)");
oci_bind_by_name($theQuery6,':here6', $_POST["txt_sname"]);
$res6=oci_execute($theQuery6);

oci_free_statement($theQuery6);

$theQuery7 = oci_parse($theCon, "insert into studshop values(:here7,7,0)");
oci_bind_by_name($theQuery7,':here7', $_POST["txt_sname"]);
$res7=oci_execute($theQuery7);

oci_free_statement($theQuery7);

$theQuery8 = oci_parse($theCon, "insert into studshop values(:here8,8,0)");
oci_bind_by_name($theQuery8,':here8', $_POST["txt_sname"]);
$res8=oci_execute($theQuery8);

oci_free_statement($theQuery8);

$theQuery9 = oci_parse($theCon, "insert into studshop values(:here9,9,0)");
oci_bind_by_name($theQuery9,':here9', $_POST["txt_sname"]);
$res9=oci_execute($theQuery9);

oci_free_statement($theQuery9);

$theQuery10 = oci_parse($theCon, "insert into studshop values(:here10,10,0)");
oci_bind_by_name($theQuery10,':here10', $_POST["txt_sname"]);
$res10=oci_execute($theQuery10);

oci_free_statement($theQuery10);
oci_close($theCon);

echo $_POST['txt_sname'] . "Account created.\n";
echo "<a href='login.php'>click here</a> to go back and sign in.";

?>