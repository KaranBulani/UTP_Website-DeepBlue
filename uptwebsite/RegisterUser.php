<?php     //start php tag
//include connect.php page for database connection
include('db_connect.php');
include 'navbar.php';
$q="SELECT card_id FROM temp";
$r= mysqli_query($connection,$q);
$log=mysqli_fetch_assoc($r);
//print_r($log);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="page-container">
      <form class="" action="reg.php" method="POST" autocomplete="on">
        <div class="container">

          <div >
            <h3>User Registration</h3>
          </div>


        <div class="row">

          <div class="col-sm-3">
            <div class="form-group">
              <label>First Name<span style="color:red;">*</span> :</label>
              <input class="form-control" name="f_name" type="text" placeholder="First Name" id="fname" onkeyup="generateFullName()">
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              <label>Middle Name:</label>
              <input class="form-control" name="m_name" type="text" placeholder="Middle Name" id="mname" onkeyup="generateFullName()">
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              <label>Last Name<span style="color:red;">*</span> :</label>
              <input class="form-control" name="l_name" type="text" placeholder="Last Name" id="lname" onkeyup="generateFullName()">
            </div>
          </div>

        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Full Name:</label>
                    <input class="form-control" name="full_name" type="text" placeholder="Full Name" id="fullname" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Mobile Number<span style="color:red;">*</span>:</label>
                    <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Residential Address<span style="color:red;">*</span> :</label>
                    <textarea rows="3" name="res_address" class="form-control" placeholder = "Flat No./BK. No. ,Building Name, Street/Area Name, City/Town - Pincode"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
              <div class="form-group">


            <label>Card Number </label>

            <input class="form-control" name="card_no" value= "<?php echo $log['card_id'];?>" placeholder="Example : 1234 5867 1235" readonly>
            </div>
          </div>

        </div>

		<div class="row">
          <div class="col-sm-6">
              <div class="form-group">


            <label>Aadhar Number </label>
            <input class="form-control" name="aa_no" type="text" placeholder="Example : 1234 5867 1235">
            </div>
          </div>

        </div>

        <div class="row">
            <div class="col-sm-4">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

      </div>
      </form>
    </div>


    <script >
        function generateFullName()
        {
            document.getElementById('fullname').value =
                document.getElementById('fname').value + ' ' +
                document.getElementById('mname').value + ' ' +
                document.getElementById('lname').value;
        }

        $(document).ready(function(){
            if(window.history.replaceState){
                window.history.replaceState(null,null,windows.location.href);
            }
        })

    </script>
  </body>

</html>
