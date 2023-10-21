<?php
include('connection.php');
$userCount = 1;

$fetchQuery = "SELECT * FROM users";
$fetchResult = mysqli_query($connection, $fetchQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch database record</title>
    <style>
        table, th, td{
            border: 1px solid;
            padding: 20px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>s/n</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>email</th>
            <th>phone Number</th>
            <th>password</th>
            <th>address</th>
            <th>action</th>
        </tr>

        <?php while($fetchData = mysqli_fetch_array($fetchResult)){?>

        <tr>
            <td><?= $userCount++ ?></td>
            <td><?= $fetchData['firstname'] ?></td>
            <td><?= $fetchData['lastname'] ?></td>
            <td><?= $fetchData['email'] ?></td>
            <td>080667768</td>
            <td>letmein</td>
            <td><?= $fetchData['address'] ?></td>
            <td>
                <a href="edit.php?user_id=<?= $fetchData['id'] ?>">Edit</a>
            </td>

        </tr>
        
        <?php } ?>p
    </table>
</body>
</html>