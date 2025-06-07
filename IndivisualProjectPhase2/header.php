<!DOCTYPE html>
<html>    
    <head>
    <link ref="stylesheet" href="style.css">
    <title><?php echo isset( $pagebar ) ? $pagebar : "Search" ?></title>
</head>
<header>
    <div class="header">
        <form action="search.php" method="GET" id="Searchinfo">
           <div>
                <input type="text" id="item" name="item" placeholder="Searchbar">
            <button type="submit" form="Searchinfo" value="Login">Search</button>
            </div>
        </form>
        <form action="main.html" method="POST" id="IDinfo">
           <div>
                <label for="Uname">User name: </label>
                <input type="text" id="Uname" name="Uname" placeholder="UserName" required>
                <label for="Pword">Password: </label>
                <input type="password" id="Pword" name="Pword" placeholder="Password" required>
            <button type="submit" form="IDinfo" value="Login">Login</button>
            <button type="submit" form="IDinfo" value="SignUp">SignUp</button>
        </div>
    </form>
    </div>
    
</header>
</html>