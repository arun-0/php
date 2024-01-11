<?php
    $con = mysqli_connect('localhost', 'root', 'Jaysiyaram1!', 'demo1');
    $res = mysqli_query($con, "SELECT * FROM `students`");
?>

<!DOCTYPE html>
<html>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <body>

        <h2><a href="create.php">Add Record</a></h2>

        <table style="width:100%">
            <tr>
                <th>Students ID</th>
                <th>Students Name</th>
                <th>Mobile</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['stud_id'];
                ?>
                <tr>
                    <td><?php echo $row['stud_id']; ?></td>
                    <td><?php echo $row['stud_name']; ?></td>
                    <td><?php echo $row['stud_mob']; ?></td>
                    <td>Update</td>
                    <td><a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>


    </body>
</html>

