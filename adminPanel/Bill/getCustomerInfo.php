

<?php
    require("../../db/db.php");


    if(isset($_POST["nic"])) {


        $nic = $_POST["nic"];


        $sql = "select * from customer where NIC='$nic' ";
        $res = mysqli_query($db, $sql);
        $count = mysqli_num_rows($res);

        if ($count == 1) {
            $row = mysqli_fetch_array($res);
            echo json_encode($DosageForms);
        }
    }
?>