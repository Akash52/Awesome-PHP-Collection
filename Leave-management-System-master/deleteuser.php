<?php
include_once 'dbcon.php';
$sql = "DELETE FROM studentregistartion WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Deleted Succesfully";
?>
    <script>
        location.replace("userdata.php");
    </script>
<?php
} else {
    echo "no data found";
}




?>