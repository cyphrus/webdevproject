<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    if(isset($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];

        if(empty($code) || empty($name)) {
            if(empty($code)) {
                echo "<font color='red'>Subject code field is empty.</font><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject name field is empty.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }
        else {
            mysqli_query($dbc, "UPDATE tblsubject SET Subject_Code='$code', Subject_Name='$name' WHERE Subject_ID='$id'");

            header("Location: ../index.php");
        }
    }
?>