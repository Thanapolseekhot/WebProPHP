<body>
    <h2>Check Number</h2>
    <form action="#" method="get">
        <input type="text" name="number" value=0>
        <br>
        <input type="submit" value="chekNum">
        <br><br>
        
    </form>
    <?php
    
        $num=0;
        $odd= 0;
        $even = 0;
        $zero = 0;
        $num = $_GET["number"];
        while($num>0){
            $checkNum = $num%10;
            if($checkNum % 2 ==0 && $checkNum>0){
                $even++;
            }
            elseif($checkNum %2 !=0){
                $odd++;
            }
            elseif($checkNum  ==0){
                $zero++;
            }
        }
        echo "<br> Num is ".$num;
        
        echo "<table border=1>";
        echo "<tr><td>Odd = </td>";
        echo "<td>".$odd."</td>";
        echo "</tr>";
        echo "<tr><td>Even = </td>";
        echo "<td>".$even."</td>";
        echo "</tr>";
        echo "<tr><td>Zero = </td>";
        echo "<td>".$zero."</td>";
        echo "</tr>";
        echo "</table>";
        ?>
</body>