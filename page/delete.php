<!DOCTYPE html>
<html>
<head>
    <title>Delete Person</title>
</head>
<body>
    <form action="/phpOOP/process.php" method="post">
        <input type="hidden" name="_method" value="DEL">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
