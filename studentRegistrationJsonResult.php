<!DOCTYPE html>
<html>
    <head><title>Student Registration Form</title>
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
        padding: 10px 10px;
        text-decoration: none;
        }
        li a:hover:not(.active) {
        background-color: #111;
        }
    </style>
    </head>
<body>
<ul>
        <li><a href="studentRegistrationJsonForm.php">Student Registration Page</a></li>
        <li><a href="studentRegistrationJsonResult.php">Student Result</a></li>
        </ul>
<?php
    $myfile = fopen("savedata.txt", "r") or die("Unable to open file!");
    
    
    echo "<table style='border:1px '>";
    echo "<tr>";
    echo "<td style='border:1px solid'>Name</td>";
    echo "<td style='border:1px solid'>E-mail</td>";
    echo "<td style='border:1px solid'>Phone</td>";
    echo "<td style='border:1px solid'>Township</td>";
    echo "<td style='border:1px solid'>Grade</td>";
    echo "<td style='border:1px solid'>Subject</td>";
    echo "</tr>";

    while(!feof($myfile)) {
        
        $st=fgets($myfile);
        if($st!=""){
            $obj=json_decode($st,true);
            echo "<tr>";
            array_walk($obj,"myfunction");
           
            echo "</tr>";
        }
    }
    function myfunction($value,$key)
    {
        echo "<td style='border:1px solid'>".$value."</td>";
    }
    fclose($myfile);
    echo "</table>";
?>
</body>
</html>