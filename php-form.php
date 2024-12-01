<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form </title>
</head>
<body>

    <form action="form-handling.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname">
        </br>
        </br>
         <label for="lname">Last Name</label>
         <input type="text" id="lname" name="lname">
         </br>
         </br>
         <label for="email">Email</label>
         <input type="email" id="email" name="uemail">

         </br>
         </br>

         <label for="password">Password</label>
         <input type="password" name="password" id="password">
         </br>
         </br>

         <input type="submit" value="Register">
    </form>

 
    

</body>
</html>