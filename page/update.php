<!DOCTYPE html>
<html>
<head>
    <title>Person Form</title>
</head>
<body>
<form action="/phpOOP/process.php" method="post">
        <input type="hidden" name="_method" value="PUT">
        
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>

        <?php include "../component/form.php"; ?>

        <input type="submit" value="Submit">
    </form>
</body>
</html>