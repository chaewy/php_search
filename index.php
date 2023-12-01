<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    
    <div id="block">
        <form action="includes/formhandler.inc.php" method="post" class="form" >
            <h3>Login meh</h3>
            <label for="">Name</label><br>
            <input type="text" id="input" name="name"><br><br>
            <label for="">Password</label><br>
            <input type="password" id="input" name="pwd"><br><br>
            <label for="" id="input">Email</label><br>
            <input type="text" id="input" name="email"><br><br>
            <button id="button">submit</button>
        </form>
        <br><br>

        <h3>Change account</h3>
        <form action="includes/userupdate.inc.php" method="post" class="form">
            <label for="">Name</label><br>
            <input type="text" id="input" name="name"><br><br>
            <label for="">Password</label><br>
            <input type="text" id="input" name="pwd"><br><br>
            <label for="" id="input">Email</label><br>
            <input type="integer" id="input" name="email"><br><br>
            <button id="button">update</button>
        </form>
        <br><br>

         <h3>User delete</h3>
        <form action="includes/userdelete.inc.php" method="post" class="form">
            <label for="">Name</label><br>
            <input type="text" id="input" name="name"><br><br>
            <label for="">Password</label><br>
            <input type="text" id="input" name="pwd"><br><br>
            <button id="button">delete</button>
         </form>

         <form action="search.php" method="post">
            <label for="search">Search for user car</label>
            <input id="search" type="text" name="usersearch">
            <button type="search">Search</button>
        </form>

        
    </div>
    

</body>
</html>