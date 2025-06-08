<!DOCTYPE html>
<html>    
    <head>
    <link ref="stylesheet" href="style.css">
    <title><?php echo isset( $pagebar ) ? $pagebar : "Search" ?></title>
</head>
<header>
    <div class="header">
        Gadgetron
        <a href="Gadgetron2002.php">2002</a>|
        <a href="Gadgetron2002.php">2004</a>|
        <a href="Gadgetron2002.php">2007</a>|
        Megacorp
        <a href="Gadgetron2002.php">2003</a>|
        Go-Comet 
        <a href="Gadgetron2002.php">2005</a>|
        GrummelNet Industries
        <a href="Gadgetron2002.php">2007</a>|
        <a href="Gadgetron2002.php">2008</a>|
        <a href="Gadgetron2002.php">2009</a>|
        <a href="Gadgetron2002.php">2012</a>|
        Zurkon Family
        <a href="Gadgetron2002.php">2021</a>|
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