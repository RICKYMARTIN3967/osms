<?php
define("TITLE", "Submit Request");
define("PAGE", "submitRequest");
include("includes/header.php");

//// storing all the data of the request form in the database
include("../dbConnection.php");
//// checking the session variables
session_start();
if($_SESSION['is_login']) {
    $rEmail = $_SESSION['rEmail'];
} else {
    echo "<script> window.location.href = 'requesterLogin.php'; </script>";
}

//// submit button 
if (isset($_REQUEST["submitrequest"])) {
    /// checking for empty fields
    if(($_REQUEST["requestinfo"]=="") || ($_REQUEST["requestdesc"]=="") || ($_REQUEST["requestername"]=="") || ($_REQUEST["requesteradd1"]=="") || ($_REQUEST["requesteradd2"]=="") || ($_REQUEST["requestercity"]=="") || ($_REQUEST["requesterstate"]=="") || ($_REQUEST["requesterzip"]=="") || ($_REQUEST["requesteremail"]=="") || ($_REQUEST["requestermobile"]=="") || ($_REQUEST["requestdate"]=="")) {
        $msg =  "<span class='alert alert-warning font-weight-bold ml-5' style='width:60%;'>Fill All The Fields</span>";
    } else {
        $rinfo = $_REQUEST["requestinfo"];
        $rdesc = $_REQUEST["requestdesc"]; 
        $rname = $_REQUEST["requestername"]; 
        $radd1 = $_REQUEST["requesteradd1"]; 
        $radd2 = $_REQUEST["requesteradd2"]; 
        $rcity = $_REQUEST["requestercity"]; 
        $rstate = $_REQUEST["requesterstate"]; 
        $rzip = $_REQUEST["requesterzip"]; 
        $remail = $_REQUEST["requesteremail"]; 
        $rmobile = $_REQUEST["requestermobile"]; 
        $rdate = $_REQUEST["requestdate"]; 

        $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date) VALUES ('$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rdate');";

        if($conn->query($sql)==TRUE) {
            $genid = mysqli_insert_id($conn);  // used to set a id 
            $msg = "<span class='alert alert-success font-weight-bold ml-5' style='width:60%;'>Request Submitted Successfully</span>";
            $_SESSION['myid'] = $genid;
            echo "<script>location.href='submitRequestSuccess.php'</script>";
        } else {
            $msg = "<span class='alert alert-danger font-weight-bold ml-5' style='width:60%;'>Unable to Submit Your Request</span>";
        }
    }
}


?>

<div class="col-sm-9 col-md-10 mt-5">      <!-- start service request form (2nd column) -->
    <form action="" method="POST" class="mx-5">
        <div class="form-group">
            <label for="inputRequestInfo">Request Info</label>
            <input type="text" class="form-control" id="inputRequestInfo" placeholder="Request Info" name="requestinfo">
        </div>
        <div class="form-group">
            <label for="inputRequestDescription">Description</label>
            <input type="text" class="form-control" id="inputRequestDescription" placeholder="Write Description" name="requestdesc">
        </div>
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requestername">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Address Line 1</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Address Line 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="requesteradd2">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="requestercity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="inputState" name="requesterstate">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="requesteremail">
            </div>
            <div class="form-group col-md-2">
                <label for="inputMobile">Mobile</label>
                <input type="text" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
            </div>
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" id="inputDate" name="requestdate">
            </div>
        </div>
        <button type="submit" class="btn btn-danger" name="submitrequest">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>     <!-- end service request form (2nd column) -->


<!-- only number of Input fields -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>



<?php
include("includes/footer.php");
?>