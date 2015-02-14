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
        <!-- above code is my test vrsion for something else that is obsolete now, dont use. Will delete myself later.-->
        
        <table>
            <?php 
                $winning_player;
                $winning = 0;
                $player_score =0;
                
                for($i=1;$i<4;$i++)
                {
                    $player_score=0;
                    echo "<tr><td><img src='img/players/player".$i.".png'></td>";
                    for($k=0;$k<4;$k++)
                    {
                        $num= generateRandomNumber();
                        echo "<td><img src='img/".generaterandomsuit()."/".$num.".png' ></td>";
                        $player_score += $num;
                    }
                    echo "<td>$player_score</td>";
                    if($player_score > $winning)
                    {
                        $winning_player = $i;
                        $winning = $player_score;
                    }
                    
                }
            ?>
        </table>
        
        <button onclick="reloadgame()">
            New Game
        </button>
        <script>
        function reloadgame() {
            location.reload();
        }
        </script>
        
        
        
        
    </div>
    
    
</body>
</html>