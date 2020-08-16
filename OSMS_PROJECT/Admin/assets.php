<?php
define("TITLE", "Assets");
define("PAGE", "assets");
include("includes/header.php");
include("../dbConnection.php");

//// checking for session variables
session_start();
if(isset($_SESSION['is_adminlogin'])) {
    $aEmail = $_SESSION['aEmail'];
} else {
    echo "<script>location.href='login.php'</script>";
}
?>


<!-- start 2nd column -->

<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="text-white bg-dark p-2">Products/part Details</p>
    <?php
    $sql = "SELECT * FROM assets_tb";
    $result = $conn->query($sql);
    if($result->num_rows>0) {
        echo "<table class='table'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th scope='col'>Product ID</th>";
                    echo "<th scope='col'>Name</th>";
                    echo "<th scope='col'>DOP</th>";
                    echo "<th scope='col'>Available</th>";
                    echo "<th scope='col'>Total</th>";
                    echo "<th scope='col'>Original Cost Each</th>";
                    echo "<th scope='col'>Selling Cost Each</th>";
                    echo "<th scope='col'>Action</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>{$row['pid']}</td>";
                    echo "<td>{$row['pname']}</td>";
                    echo "<td>{$row['pdop']}</td>";
                    echo "<td>{$row['pava']}</td>";
                    echo "<td>{$row['ptotal']}</td>";
                    echo "<td>{$row['poriginalcost']}</td>";
                    echo "<td>{$row['psellingcost']}</td>";
                    echo "<td>";
                        echo "<form action='editproduct.php' method='POST' class='d-inline'><input type='hidden' value='{$row['pid']}' name='id'><button type='submit' class='btn btn-info mr-3' name='edit'><i class='fas fa-pen'></i></button></form>";
                        echo "<form action='' method='POST' class='d-inline'><input type='hidden' value='{$row['pid']}' name='id'><button type='submit' class='btn btn-secondary mr-3' name='delete'><i class='far fa-trash-alt'></i></button></form>";
                        echo "<form action='sellproduct.php' method='POST' class='d-inline'><input type='hidden' value='{$row['pid']}' name='id'><button type='submit' class='btn btn-warning mr-3' name='issue'><i class='fas fa-handshake'></i></button></form>";
                    echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 Result";
    }
    ?>
</div>    <!-- end 2nd column -->

<?php
//// delete icon button code
if(isset($_REQUEST['delete'])) {
    $sql = "DELETE FROM assets_tb WHERE pid = '{$_REQUEST['id']}'";
    if($conn->query($sql)) {
        echo "<meta http-equiv='refresh' content='0;URL=?deleted' />";
    } else {
        echo "Unable to Delete";
    }
}
?>

    </div>   <!-- end row -->
    <div class='float-right'>
        <a href="addproduct.php" class='btn btn-danger'><i class="fas fa-plus fa-2x"></i></a>
    </div>

</div>   <!-- end container -->


<!-- javaScript files -->
<script src="../js/jquery.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>


</body>
</html>



