<?php     //start php tag
//include connect.php page for database connection
include('db_connect.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
echo "please fill the empty field.";
}
else
{
$sql="insert into register(name,email,password,repassword) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$res=mysqli_query($connection, $sql);
if($res)
{
header('Location:login.php');
}
else
{
echo "There is some problem in inserting record";
}

}
}

?>
