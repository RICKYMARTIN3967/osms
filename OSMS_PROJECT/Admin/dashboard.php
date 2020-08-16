<?php
define("TITLE", "Dashboard");
define("PAGE", "dashboard");
include("includes/header.php");
include("../dbConnection.php");

//// checking for session variables
session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}

////// request recieved
$sql = "SELECT max(request_id) FROM submitrequest_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();        //// it gives us numeric array
$submitrequest = $row[0];


///// assigned work
$sql = "SELECT max(rno) FROM assignwork_tb";
$result = $conn->query($sql);
$row = $result->fetch_row();        //// it gives us numeric array
$assignwork = $row[0];


//// no of technician
$sql = "SELECT * FROM technician_tb";
$result = $conn->query($sql);
$totaltech = $result->num_rows;

?>


    <div class="col-sm-9 col-md-10">   <!-- start dashboard (2nd column) -->
        <div class="row text-center mx-5">
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-danger" style="max-width:18rem;">
                    <div class="card-header">Requests Recived</div>
                    <div class="card-body">
                        <div class="card-title"><?php echo $submitrequest; ?></div>
                        <a href="request.php" class="btn text-white">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-success" style="max-width:18rem;">
                    <div class="card-header">Assigned Work</div>
                    <div class="card-body">
                        <div class="card-title"><?php echo $assignwork; ?></div>
                        <a href="work.php" class="btn text-white">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card text-white bg-info" style="max-width:18rem;">
                    <div class="card-header">No. of Technician</div>
                    <div class="card-body">
                        <div class="card-title"><?php echo $totaltech; ?></div>
                        <a href="technician.php" class="btn text-white">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-5 mt-5 text-center">
            <p class="bg-dark text-white p-2">List of Requesters</p>
            <?php
                $sql = "SELECT * FROM requesterlogin_tb";
                $result = $conn->query($sql);
                if($result->num_rows>0) {
                    echo '
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Requester ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                    <tbody>';
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo "<td> {$row['r_login_id']} </td>";
                        echo "<td> {$row['r_name']} </td>";
                        echo "<td> {$row['r_email']} </td>";
                        echo "</tr>";
                    }
                    echo '</tbody>
                    </table>';
                } else {
                    echo "0 Result";
                }
            ?>
        </div>
    </div>   <!-- end dashboard (2nd column) -->

<?php
include("includes/footer.php");
?>