<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form with Database Connection</title>
</head>
<body>
    <center>
    <h1>User Registration Form</h1>
    
    <!-- HTML Form -->
    <form action="process.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone No:</label>
        <input type="phone" id="phone" name="phone" required><br><br>

        <label for="comment">Comment:</label> 
        <textarea name="comment" rows="5" cols="40"></textarea><br><br>
  
        
        <input type="submit" value="Submit">
    </form>
</center>
</body>
</html>