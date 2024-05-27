<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Data Forms</h1>
   <div class="container">
    <form action="connection.php" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="enter your name">
        </div>
        <div>
            <label>email</label>
            <input type="email" name="email" placeholder="enter your email">
        </div>
        <div class="gendercontainer">
            <label>Gender</label>
            <input class="gender1" type="radio" name="gender" value="m">Male
            <input class="gender1" type="radio" name="gender" value="f">Female
            <input class="gender1" type="radio" name="gender" value="o">others
        </div>
        <div>
            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="enter your mobile">
        </div>
        <div class="btn">
            <button type="submit">Submit data</button>
        </div>
    </form>
   </div> 
</body>
</html>