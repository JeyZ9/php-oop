<?php

include "connect.php";

$sql = "SELECT * FROM person";
$stmt = $pdo->prepare($sql);

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Person Form</title>
</head>
<br>
    <form action="process.php/add" method="post">
    <input type="hidden" name="_method" value="POST">
        <?php include"./component/form.php" ?>
        <input type="submit" value="Submit">
    </form>

    <?php foreach($results as $r){?>
        <tr class="">
            <td class="px-5 py-2"><?=$r['name'] ?></td>
            <td class="px-5 py-2"><?=$r['age']?></td>
            <td class="px-5 py-2"><?=$r['street']?></td>
            <td class="px-5 py-2"><?=$r['city']?></td>
            <td class="px-5 py-2"><?=$r['state']?></td>
            <td class="px-5 py-2"><?=$r['postalCode']?></td>
        </tr></br>
    <?php }?>


</body>
</html>