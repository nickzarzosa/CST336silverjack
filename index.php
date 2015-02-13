<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>silverjack game</title>

        <link href="css/styles.css" rel="stylesheet"/>
        <?php include 'includes/functions.php';?>
        <meta charset="utf-8" />
        

</head>
<body>
    
    <div id="wrapper">
        <h1><b>Silverjack</b></h1>  
        <table>
            <tr><td><img src="img/players/player1.png"></td>
            <td><?php echo "<img src='img/".generaterandomsuit()."' >"?></td></tr>
        </table>
        
        
    </div>
    
    
</body>
</html>