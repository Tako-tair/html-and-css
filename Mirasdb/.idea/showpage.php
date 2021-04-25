<?php
require 'dball.php';
$students = getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of students</title>
    <style>
        td {x
        border: 1px solid grey;
        }
    </style>
</head>
<body>
<table>
    <?php
    if($students != null){
        foreach($students as $s){
            ?>
            <tr>
                <td> <?php echo $s['login'] ?>     </td>
                <td> <?php echo $s['password'] ?>   </td>
                <td> <?php echo $s['age'] ?>    </td>
                <td> <?php echo $s['email'] ?>   </td>
                <td> <?php echo $s['city'] ?>     </td>
                <td> <?php echo $s['university'] ?>   </td>
                <td> <?php echo $s['gender'] ?>    </td>
                <td> <a href="editform.php?id=<?php echo $s['id']; ?>">EDIT</a> </td>
                <td> <a href="delete.php?id=<?php echo $s['id']; ?>">DELETE</a> </td>
            </tr>

        <?php }} ?>
</table>
</body>
</html>