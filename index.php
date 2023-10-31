<?php
    include_once("dbConnection/mysqlconfig_connection.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample CRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="form/addform.php">Add Subject</a><br></br>
    <table width = '100%' border = 1>
        <tr bgcolor= '#CCCCCC'>
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>
        <?php
            while($res = mysqli_fetch_array($result))   {
                echo "<tr>";
                echo "<td>".$res['Subject_ID']."</tr>";
                echo "<td>".$res['Subject_Code']."</tr>";
                echo "<td>".$res['Subject_Name']."</tr>";
                echo "<td><a href=\"forms/editform.php?id=$res[Subject_ID]\">Edit</a> |
                        <a href=\"functions/delete.php?id=$res[Subject_ID]\"
                        onClick=\"return confirm('Are you sure you want to delete?'\"Delete</a></td>";
            }
    </table>
</body>
</html>