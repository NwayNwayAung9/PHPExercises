<!DOCTYPE html>
<html>
    <head>
    <style>
    body{
            margin:40px;
            padding:0;
        }
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        margin:0;s
        }
        li {
        float: left;
        }
        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        li a:hover:not(.active) {
        background-color: #111;
        }
    </style>
    </head>
<body>
<ul>
        <li><a href="FileAssignmentForm.php">Student Registration Page</a></li>
        <li><a href="fileAssignmentResult.php">Student Result</a></li>
        </ul>
        <h3>Student Registration Result</h3>
<?php
    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
   
    echo "<table style='border:1px ' ; margin-top:90px;>";
    echo "<tr>";
    echo "<td style='border:1px solid'>Name</td>";
    echo "<td style='border:1px solid'>E-mail</td>";
    echo "<td style='border:1px solid'>Phone</td>";
    echo "<td style='border:1px solid'>Township</td>";
    echo "<td style='border:1px solid'>Grade</td>";
    echo "<td style='border:1px solid'>Subject</td>";
    echo "</tr>";
  
    while(!feof($myfile)) {
        
       echo "<tr>";
        $st=fgets($myfile);
        if($st!=""){
            $str_arr = explode (";", $st); 

            $res=explode("=",$str_arr[0]);
            $res1=explode("=",$str_arr[1]);
            $res2=explode("=",$str_arr[2]);
            $res3=explode("=",$str_arr[3]);
            $res4=explode("=",$str_arr[4]);
            $res5=explode("=",$str_arr[5]);
            $student=array($res,$res1,$res2,$res3,$res4,$res5);
            for($i=0;$i<6;$i++){
                echo "<td style='border:1px solid'>".$student[$i][1]."</td>";
            }
        }
        echo "</tr>";
    }
    
    fclose($myfile);
    echo "</table>";
?>
</body>
</html>