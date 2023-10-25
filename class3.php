<?php
include('connection.php');
if(isset($POST['delete_user '])){
    $userId = mysqli_escape_string($connection, $_POST['user_id']);

    $deleteUserQuery = "DELETE FROM user WHERE id = '$userId'";
    $deleteUSerResult = mysqli_Qurey($connection, $deleteUserQuery);
    $deleteUserData = mysqli_delete_assoc($deleteUserResult);

    
}

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
                <form action="class3.php" method="post" enctype="multipart">
                    <input type="hidden"name="user_id" value="" >
                    <button style="background-color: red;  color: #fff; border:1px solid red; border-radius:3px; padding: 5px;" type="submit" name="delete">DELETE</button>
                </form>
            </td>

        </tr>
        
        <?php } ?>
    </table>
</body>
</html>