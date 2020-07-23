<!doctype html>
<html>
<head>
</head>
<body>
<table  border="1" cellpadding="3" cellspacing="0">
<?php

for($i=0;$i<8;$i++)
{
    echo "<tr >";
   
    for($j=0;$j<8;$j++)
{
    $r=$i+$j;
   if($r%2==0 )
   echo "<td  BGCOLOR=#000000 width=50; height=50;></td>";
   else 
   echo "<td  BGCOLOR=#ffffff  width=50; height=50;></td>";
    
}
echo "</tr>";
}
?>
</table>
</body>
</html>



