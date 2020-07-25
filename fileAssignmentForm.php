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
        <li><a href="fileAssignmentForm.php">Student Registration Page</a></li>
        <li><a href="fileAssignmentResult.php">Student Result</a></li>
        </ul>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <h3>Student Registration Form</h3>
    <table>

    <tr>
    <td>Name</td>
    <td> <input type="text" name="name"></td>
    </tr>

    <tr>
    <td>E-mail</td>
    <td> <input type="email" name="mail"></td>
    </tr>
   
    <tr>
    <td>Phone</td>
    <td><input type="phone" name="phone"></td>
    </tr>

    <tr>
    <td>Township</td>
    <td><select name="township">
            <option value="">Select Your Town</option>
            <option value="dawei">Dawei</option>
            <option value="yangon">Yangon</option>
            <option value="mandalay">Mandalay</option>
    </select> 
    </td>
    </tr>
 
    <tr>
    <td>Grade</td>
    <td> 
    <input type="radio" name="grade" value="first">First year
    <input type="radio" name="grade" value="second">Second year 
    <input type="radio" name="grade" value="third">Third year
    <input type="radio" name="grade" value="fourth">Fourth year
    <input type="radio" name="grade" value="fifth">Fifth year
    </td>
    </tr>

    <tr>
    <td>Subject</td>
    <td> 
    <input type="checkbox" name="sub[]" value="501">501
    <input type="checkbox" name="sub[]" value="502">502
    <input type="checkbox" name="sub[]" value="503">503
    <input type="checkbox" name="sub[]" value="504">504
    <input type="checkbox" name="sub[]" value="505">505
    <input type="checkbox" name="sub[]" value="506">506
    </td>
    </tr>
  
    <tr>
    <td></td>
    <td> <input type="submit" name="submit" value="Submit"> </td>
    </tr>
   
    </table>
    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $phone = $_POST['phone'];
            $township=$_POST['township'];
            $grade=$_POST['grade'];
            $subject=$_POST['sub'];

            $sdata = "Name=".$name.";E-mail=".$mail.";Phone=".$phone.";Township=".$township.";Grade=".$grade.";Subject=";
            if(!empty($subject)) 
            {
                $val="";
                foreach($subject as $subjects)
                    {
                        $val.=$subjects." ";
                    }
            }
              
                $sdata.=$val;
                echo $sdata;
            $myfile = fopen("data.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $sdata."\n");
            fclose($myfile);

            
          }
    ?>

</body>
</html>