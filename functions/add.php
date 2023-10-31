<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
    <body>
        <?php
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
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
                    $result = mysqli_query($dbc, "INSERT INTO tblsubjects(Subject_Code, Subject_Name) VALUES('$code','$name')");

                    echo "<font color='green'>Data added successfully.</font>";
                    echo "<br/><a href='../index.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>