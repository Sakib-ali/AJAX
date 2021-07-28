<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <form action="/ajax/userlist.php" method="Get">
        <input type="text" name="username" value="">
        <input type="submit" name="search" value="Search">
    </form>
    <hr>
    <table><tr><th>Id</th><th>Username</th><th> Action</th></tr></table>
    <br>
    <span style="color:red"></span>
    <span style="color:green"></span>
    <br><br>
    <a href="Homepage.php">Home</a>
    <a href="Logout.php">Logout</a>
</body>
</html>