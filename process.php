<?php

include "./model/Address.php";
include "./model/Person.php";
include "./connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['_method']) && $_POST['_method'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];

    $address = new Address($street, $city, $state, $postalCode);
    $person = new Person($name, $age, $address);

    $sql = "
    INSERT INTO person(name, age, street, city, state, postalCode) 
    VALUES (:name, :age, :street, :city, :state, :postalCode);
    ";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':postalCode', $postalCode);

    if ($stmt->execute()) {
        echo "Person inserted: " . $name;
    } else {
        echo "Error inserting person.";
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];

    $sql = "
        UPDATE person
        SET name = :name, age = :age, street = :street, city = :city, state = :state, postalCode = :postalCode
        WHERE id = :id
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Person updated successfully.";
    } else {
        echo "Error updating person.";
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === "DEL") {
        $id = $_POST['id'];
    
        $sql = "DELETE FROM person WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
    
        if ($stmt->execute()) {
            echo "Person with ID " . htmlspecialchars($id) . " deleted successfully.";
        } else {
            echo "Error deleting person.";
        }
    }

}