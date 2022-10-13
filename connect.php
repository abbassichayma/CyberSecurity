<?php
$con=mysql_connect("localhost","db_username","db_password");
if(!$con){
    echo("error".mysql_error());
}
$select_mydb=mysql_select_db("name_db",$con);
if(!$select_mydb){
    echo("error".mysql_error());
}
$security=$_POST['security'];
$birth=$_POST['birth'];
$sql=mysql_query("insert into nametable (security,birth) VALUES('$security',$birth)",$con);
mysql_close();
?>