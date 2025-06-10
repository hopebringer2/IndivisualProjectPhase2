<!DOCTYPE html>
<html>    
    <head>
    <link ref="stylesheet" href="style.css">
</head>
<header>
    <menu class="header" onload="setTitle()">
        <a href="test.php" onclick="makeTitle('Gadgetron');">Gadgetron</a>
        <a href="test.php" onclick="makeTitle('Gadgetron 2002');">2002</a> |
        <a href="test.php" onclick="makeTitle('Gadgetron 2004');">2004</a> |
        <a href="test.php" onclick="makeTitle('Gadgetron 2007');">2007</a> |
        <a href="test.php" onclick="makeTitle('Megacorp');">Megacorp</a> |
        <a href="test.php">Go-Comet</a> |
        <a href="test.php">GrummelNet Industries</a>
        <a href="test.php">2007</a> |
        <a href="test.php">2008</a> |
        <a href="test.php">2009</a> |
        <a href="test.php">2012</a> |
        <a href="test.php">Zurkon Family</a>
    </menu>
    <p></p>

</header>

<script src="pullitemlist.js"></script>
<script>
    function setTitle(){
        let titlename=getcookie("title");
        if(titlename!=""){
            document.title=titlename;
        }else{
            document.title="fail";
        }
    }
</script>
</html>