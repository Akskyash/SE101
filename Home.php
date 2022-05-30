<html>
    <head>
        <title>My Home</title>
</head>
<body>
    <h1>Home Sweet Home</h1>
   
<form action= "../Control/Process.php" method="POST">
    <table>
    <tr><td>Enter your name: </td>
        <td><input type="text" placeholder="Full Name"></td></tr>
   <tr><td> Enter your password: </td>
      <td> <input type="password" ></td>
      <tr><td>Select Gender</td>
      <td><input type="radio" name="gender">male
    <input type="radio" name="gender">female</td></tr>
    <tr><td><input type="submit" name="submit" value = "Register"></td></tr>

</table>
</form>

</body>
</html>
