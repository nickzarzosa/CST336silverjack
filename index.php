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
        <!--<table>
            <tr><td><img src="img/players/player1.png"></td>
            <td><?php echo "<img src='img/".generaterandomsuit()."' >"?></td>
            <td><?php echo "<img src='img/".generaterandomsuit()."' >"?></td>
            <td><?php echo "<img src='img/".generaterandomsuit()."' >"?></td>
            <td><?php echo "<img src='img/".generaterandomsuit()."' >"?></td></tr>
        </table>-->
        
        <table>
            <?php 
                $winning_player;
                $winning = 0;
                $player_score =0;
                
                for($i=1;$i<4;$i++)
                {
                    echo "<tr><td><img src='img/players/player".$i.".png'></td>";
                    for($k=0;$k<4;$k++)
                    {
                        $num= generateRandomNumber();
                        echo "<td><img src='img/".generaterandomsuit()."/".$num.".png' ></td>";
                        $player_score += $num;
                    }
                    if($player_score > $winning)
                    {
                        $winning_player = $i;
                        $winning = $player_score;
                    }
                    
                }
            ?>
        </table>
        
        
    </div>
    
    
</body>
</html>