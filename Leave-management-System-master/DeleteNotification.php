<?php
include_once 'dbcon.php';
$sql = "DELETE FROM action WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Deleted Succesfully";
?>
    <script>
        location.replace("LeaveApplication.php");
    </script>
<?php
} else {
    echo "no data found";
}
?>