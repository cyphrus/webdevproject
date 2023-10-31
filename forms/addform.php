<!DOCTYPE html>
<html>
<head>
    <title>Add Data</title>
</head>
<body>
    <h1 style="text-align: center;">ADD SUBJECT</h1>
    <a href="../index.php">Back to Home</a>
    <br/><br/>
    <form action="../functions/add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td style="font-weight: bold;">Subject Code</td>
                <td><input type="text" name="code"></td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Subject Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="ADD"></td>
            </tr>
        </table>
    </form>
</body>
</html>