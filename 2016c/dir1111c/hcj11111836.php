<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JavaScript</title>
    <script src="../jquery-2.1.4.min.js"></script>
    <script>
        setTimeout('funcone()',3000);
        var fid = setInterval('functwo()',6000);
        $(document).ready(function(){
            $("#click").click(function(){
                $("p").toggle();
            });
        });
        function rffunc(){
            window.location.reload();
        }
        function stopInterval(){
            clearInterval(fid);
        }
        function funcone(){
            document.write("<h1 align='center'>wait</h1>");
        }
        function functwo(){
            window.location.reload();
        }
    </script>
</head>
<?php include_once 'session_test.php';?>
<div align="center">
    <p>JavaScript</p>
    <input type="button" id="click" value="click">
    <input type="button" value="refresh" onclick="rffunc()">
    <input type="button" value="stop" onclick="stopInterval()">
</div>
<h1 align="center"><?php echo $_SESSION['views'];?></h1>
</body>
</html>