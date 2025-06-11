<!DOCTYPE html>
<html>    
    <head>
    <link ref="stylesheet" href="style.css">
</head>
<header>
    <p></p>

</header>

<script src="pullitemlist.js"></script>
<script>
    window.onload=function setTitle(){
        let titlename=getcookie("title");
        if(titlename!=""){
            document.title=titlename;
        }else{
            document.title="fail";
        }
    };
</script>
</html>