<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
    <script src="jsfile.js"></script>

</head>
<style>

</style>

<body>
    <form action="index.php" method="GET">
        <label for="name">Name &nbsp&nbsp </label>
        <input type="text" id="name" name="name" ><br><br>

        <label for="age">Age &nbsp&nbsp&nbsp&nbsp</label>
        <input type="number" name="age" id="age"><br><br>

        <label for="email">E-mail &nbsp </label>

       <input type="email" id="email" name="email" ><br><br>
        <input type="button" value="Add" name="Submit" onclick="show()">

</form>
<div id="table"></div>
</body>

</html>

