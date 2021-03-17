<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 2px solid brown;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;    
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cal Grade Period Average</title>
</head>
<body>
<center>
    <form action="calgpa.php" method="GET">
    <h1>HW4 : Cal Grade Period Average</h1>
    <table style="width:20%">
    <tr style="background-color:#FA9D89">
        <th>#</th>
        <th>ชื่อวิชา</th>
        <th>หน่วยกิต</th>
        <th>เกรด</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type="text" name="s1" required/></td>
        <td><center><select style="width:80%" name="credit1" id="credit1">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select></center></td>
        <td><center><select style="width:100%" name="grade1" id="grade1">
                <option value=4>A</option>
                <option value=3.5>B+</option>
                <option value=3>B</option>
                <option value=2.5>C+</option>
                <option value=2>C</option>
                <option value=1.5>D+</option>
                <option value=1>D</option>
                <option value=0>F</option>
            </select></center></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type="text" name="s2" required/></td>
        <td><center><select style="width:80%" name="credit2" id="credit2">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select></center></td>
        <td><center><select style="width:100%" name="grade2" id="grade2">
        <option value=4>A</option>
                <option value=3.5>B+</option>
                <option value=3>B</option>
                <option value=2.5>C+</option>
                <option value=2>C</option>
                <option value=1.5>D+</option>
                <option value=1>D</option>
                <option value=0>F</option>
            </select></center></td>
    </tr>
    <tr>
        <td>3</td>
        <td><input type="text" name="s3" required/></td>
        <td><center><select style="width:80%" name="credit3" id="credit3">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select></center></td>
        <td><center><select style="width:100%" name="grade3" id="grade3">
        <option value=4>A</option>
                <option value=3.5>B+</option>
                <option value=3>B</option>
                <option value=2.5>C+</option>
                <option value=2>C</option>
                <option value=1.5>D+</option>
                <option value=1>D</option>
                <option value=0>F</option>
            </select></center></td>
    </tr>
    <tr>
        <td>4</td>
        <td><input type="text" name="s4" required/></td>
        <td><center><select style="width:80%" name="credit4" id="credit4">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select></center></td>
        <td><center><select style="width:100%" name="grade4" id="grade4">
                <option value=4>A</option>
                <option value=3.5>B+</option>
                <option value=3>B</option>
                <option value=2.5>C+</option>
                <option value=2>C</option>
                <option value=1.5>D+</option>
                <option value=1>D</option>
                <option value=0>F</option>
            </select></center></td>
    </tr>
    <tr>
        <td>5</td>
        <td><input type="text" name="s5" required/></td>
        <td><center><select style="width:80%" name="credit5" id="credit5">
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select></center></td>
        <td><center><select style="width:100%" name="grade5" id="grade5">
                <option value=4>A</option>
                <option value=3.5>B+</option>
                <option value=3>B</option>
                <option value=2.5>C+</option>
                <option value=2>C</option>
                <option value=1.5>D+</option>
                <option value=1>D</option>
                <option value=0>F</option>
            </select></center></td>
    </tr>
    </table>
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</center>  
    <?php
    if(isset($_GET['submit'])){
        $GPA = 0 ;
        $s1 = $_GET["s1"];
        $s2 = $_GET["s2"];
        $s3 = $_GET["s3"];
        $s4 = $_GET["s4"];
        $s5 = $_GET["s5"];
        
        $credit1 = $_GET["credit1"];
        $credit2 = $_GET["credit2"];
        $credit3 = $_GET["credit3"];
        $credit4 = $_GET["credit4"];
        $credit5 = $_GET["credit5"];

        $grade1 = $_GET["grade1"];
        $grade2 = $_GET["grade2"];
        $grade3 = $_GET["grade3"];
        $grade4 = $_GET["grade4"];
        $grade5 = $_GET["grade5"];

        echo "<center><h2>วิชา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน่วยกิต&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกรด<br><br>";
        echo "<center><h2>1.",$s1,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$credit1,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$grade1,"<br><br>";
        echo "2.",$s2,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$credit2,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$grade2,"<br><br>";
        echo "3.",$s3,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$credit3,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$grade3,"<br><br>";
        echo "4.",$s4,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$credit4,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$grade4,"<br><br>";
        echo "5.",$s5,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$credit5,"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$grade5,"</h2><br>";

        $sum1 = $grade1 * $credit1 ;
        $sum2 = $grade2 * $credit2 ;
        $sum3 = $grade3 * $credit3 ;
        $sum4 = $grade4 * $credit4 ;
        $sum5 = $grade5 * $credit5 ;
        $GPA = ($sum1+$sum2+$sum3+$sum4+$sum5)/($credit1+$credit2+$credit3+$credit4+$credit5) ;
        echo "เกรดรวม = ",round($GPA, 2);
        
    }
    ?>
</body>
</html>