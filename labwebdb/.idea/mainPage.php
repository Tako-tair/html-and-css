<?php
require 'dbinfo.php';
$students = getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN PAGE</title>
</head>
<body>
<table>
    <?php
    if($students != null){
        foreach($students as $s){
            ?>
            <tr>
                <td> <?php echo $s['id'] ?>     </td>
                <td> <?php echo $s['name'] ?>   </td>
                <td> <?php echo $s['password'] ?>    </td>
                <td> <?php echo $s['age'] ?>   </td>
                <td> <?php echo $s['city'] ?>     </td>
                <td> <?php echo $s['email'] ?>   </td>
                <td> <?php echo $s['university'] ?>    </td>
                <td> <?php echo $s['gender'] ?>   </td>
                <td> <a href="editstudentsform.php?id=<?php echo $s['id']; ?>">EDIT</a> </td>
                <td> <a href="deletestudents.php?id=<?php echo $s['id']; ?>">DELETE</a> </td>
            </tr>
        <?php }} ?>
</table>
<a href="main.php">logout</a>
</body>
</html>