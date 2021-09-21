<!DOCTYPE html>
<html>
    <head>
        <title>Lab5-php</title>
    </head>
    
    <body style="background-color: #e2e6b0;">
    
    <?php
        $rows = $_POST['rows'];
        $coloumns = $_POST['coloumns'];
        session_start();
        if(isset($_SESSION['views']))
            $_SESSION['views'] = $_SESSION['views']+ 1;
        else
            $_SESSION['views'] = 1;
        $visits = $_SESSION['views'];
        
        echo '<div style="text-align: center; font-size: 22px; font-weight: bold"> Welcome. This is your table </div>';
        
        echo "<br>";
        
        echo "<div style='text-align: center; font-size: 18px; font-weight: bold'>The number of visits is: $visits </div><br>";
    
        if ( ($rows < 3 || $rows > 12) || ($coloumns < 3 || $coloumns > 12) )
        {
            echo "Invalid Input. Input must be between (3-12) for both entries";
        } 
        else
        {
            echo "The number of rows is: $rows and the number of coloumns is: $coloumns <br>";
            echo "<table align=\"center\">";
            
            for ($i = 1; $i <= $rows; $i++)
            {
                echo "<tr>";
                for ($j = 1; $j <= $coloumns; $j++)
                {
                    $num = $j * $i;
                    echo "<td>$num<td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </body>
</html>
