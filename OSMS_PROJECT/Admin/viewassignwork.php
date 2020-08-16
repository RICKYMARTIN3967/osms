<?php
define("TITLE", "Work Order");
define("PAGE", "work");
include("includes/header.php");
include("../dbConnection.php");

/// 
session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}
?>

<!-- start 2nd column -->
<div class="col-sm-6 mt-5 mx-3">
    <h3 class='text-center'>Assigned Work Details</h3>
    <?php
    if(isset($_REQUEST['view'])) {
        $sql = "SELECT * FROM assignwork_tb WHERE request_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); ?>

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Request ID</td>
                    <td><?php if(isset($row["request_id"])) {echo $row['request_id'];} ?></td>
                </tr>
                <tr>
                    <td>Request Info</td>
                    <td><?php if(isset($row["request_info"])) {echo $row['request_info'];} ?></td>
                </tr>
                <tr>
                    <td>Request Description</td>
                    <td><?php if(isset($row["request_desc"])) {echo $row['request_desc'];} ?></td>
                </tr>
                <tr>
                    <td>Requester Name</td>
                    <td><?php if(isset($row["requester_name"])) {echo $row['requester_name'];} ?></td>
                </tr>
                <tr>
                    <td>Address Line 1</td>
                    <td><?php if(isset($row["requester_add1"])) {echo $row['requester_add1'];} ?></td>
                </tr>
                <tr>
                    <td>Address Line 2</td>
                    <td><?php if(isset($row["requester_add2"])) {echo $row['requester_add2'];} ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php if(isset($row["requester_city"])) {echo $row['requester_city'];} ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?php if(isset($row["requester_state"])) {echo $row['requester_state'];} ?></td>
                </tr>
                <tr>
                    <td>Pin Code</td>
                    <td><?php if(isset($row["requester_zip"])) {echo $row['requester_zip'];} ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php if(isset($row["requester_email"])) {echo $row['requester_email'];} ?></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><?php if(isset($row["requester_mobile"])) {echo $row['requester_mobile'];} ?></td>
                </tr>
                <tr>
                    <td>Assigned Date</td>
                    <td><?php if(isset($row["assign_date"])) {echo $row['assign_date'];} ?></td>
                </tr>
                <tr>
                    <td>Technician Name</td>
                    <td><?php if(isset($row["assign_tech"])) {echo $row['assign_tech'];} ?></td>
                </tr>
                <tr>
                    <td>Customer Care</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Technician Sign</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <form action="" class="mb-3 d-print-none d-inline">
                <input type="submit" class="btn btn-danger mr-3" value="print" onClick="window.print();"> 
            </form>
            <form action="work.php" class="mb-3 d-print-none d-inline">
                <input type="submit" class="btn btn-secondary" value="close">
            </form>
        </div>

    <?php } ?>
</div>
<!-- end 2nd column -->

<?php
include("includes/footer.php");
?>