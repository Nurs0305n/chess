<!DOCTYPE html>
<html> 
<head> 
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
    .td{
      transform: rotate(0.5turn);
      text-align-last: center;
      background-color: #fff000;
    }
    .tdn{
      text-align-last: center;
      background-color: #fff000;
    }
</style>
</head>
<body> 
<h3>Шахматная доска с использованием цикла For</h3>
<div>
<table width="275px" cellspacing="0px" cellpadding="0px" border="1px">
<!-- cell 225px wide (8 columns x 50px) -->
<?php
$word = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
$num = [];
for($row=1;$row<=10;$row++)
{
  echo "<tr>";
  if ($row == 1){
    for ($col=1;$col<=10;$col++){
        if ($col>=2 and $col <=9) {
            echo "<td class='td' height=25px width=25px>";
            echo $word[$col-2];
            echo "</td>";
        }
        else{
            echo "<td class='tdn' height=25px width=25px></td>";
        }
    }
  }
  elseif ($row == 10){
    for ($col=1;$col<=10;$col++){
        if ($col>=2 and $col <=9) {
            echo "<td class='tdn'  height=25px width=25px> ";
            echo $word[$col-2];
            echo "</td>";
        }
        else{
            echo "<td class='tdn' height=25px width=25px></td>";
        }
    }
  }
  elseif($row>1 and $row<10){for($col=1;$col<=10;$col++)
  {
  $total=$row+$col;
  if($col == 1){
    echo "<td class='tdn'>";
    echo $row-1;
    echo "</td>";
  }
  elseif($col == 10){
    echo "<td class='td'>";
    echo $row-1;
    echo "</td>";
  }
  elseif($total%2==0)
  {
  echo "<td height=25px width=25px bgcolor=#FFFFFF></td>";
  }
  else
  {
  echo "<td height=25px width=25px bgcolor=#000000></td>";
  }
  }
  echo "</tr>";
}}
?>
</table>
</div>
</body>
</html>
