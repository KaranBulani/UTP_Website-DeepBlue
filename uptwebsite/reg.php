<?php     //start php tag
//include connect.php page for database connection
include('db_connect.php');
//if submit is not blanked i.e. it is clicked.
if(isset($_REQUEST['submit'])!='')
{
if($_REQUEST['full_name']=='' || $_REQUEST['mobile_no']=='' || $_REQUEST['res_address']==''|| $_REQUEST['card_no']=='' || $_REQUEST['aa_no']=='')
{
echo "please fill the empty field.";
}
else
{
$sql="insert into registeruser(full_name,mobile_no,res_address,card_no,aa_no) values('".$_REQUEST['full_name']."', '".$_REQUEST['mobile_no']."', '".$_REQUEST['res_address']."', '".$_REQUEST['card_no']."', '".$_REQUEST['aa_no']."')";
$sql1="insert into incentive_table(card_no,daily_incentives,weekly_incentives,total_incentives) values('".$_REQUEST['card_no']."',NULL,NULL,NULL)";
$res=mysqli_query($connection, $sql);
$res1=mysqli_query($connection, $sql1);
if($res||$res1)
{
header('Location:RegisterUser.php');
}
else
{
echo "There is some problem in inserting record";
}

}
}

?>
