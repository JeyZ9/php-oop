<?php

// include "./model/Address.php";
// include "./model/Person.php";

// // สร้าง instance ของ Address
// $address = new Address('123 Main St', 'Springfield', 'IL', '62701');

// // สร้าง instance ของ Person โดยใช้ address ที่สร้างไว้
// $person = new Person('John Doe', 30, $address);

// echo $person;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Person Form</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="street">Street:</label>
        <input type="text" id="street" name="street" required><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br>

        <label for="postalCode">Postal Code:</label>
        <input type="text" id="postalCode" name="postalCode" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>