
<!DOCTYPE html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$Math=$_POST['math'];
	$Eng=$_POST['eng'];
	$Kisw=$_POST['kisw'];
	$See=$_POST['see'];
	$Science=$_POST['science'];
	$total=0;
	$total=$Math+$Eng+$See+$Kisw+$Science;
	$AVERAGE=($total/5);
	
	if($AVERAGE>80 && $AVERAGE<=100){
		echo "A";
		
	}
	else if($AVERAGE<80&&$AVERAGE>=70){
		echo "B";
		}
	else if($AVERAGE<70&&$AVERAGE>=60){
		echo "C";
		
	}
	else if($AVERAGE<60&&$AVERAGE>=50){
		echo "D";
		
	}
	else if($AVERAGE<50&&$AVERAGE>=0){
		echo "F";
		
	}
} 
?>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate Agnecy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
	<title>Home</title>
</head>
<body>
<form method="POST" action="">
<table border="1" width=100%>
<tr><th colspan="2">DKUT STUDENT RESULT SYSTEM</th></tr>
<tr>
	<td>MATH</td>
	<td>
	<form><input type="text" name="math" max=100></form>	
	<?php echo "<?php echo "$total";?>
	</td>

</tr>
<tr>
	<td>ENG</td>
	<td>
	<form><input type="text" name="eng"></form>	
	</td>
</tr>
<tr>
	<td>KISW</td>
	<td>
	<form><input type="text" name="kisw"></form>	
	</td>
</tr>
<tr>
	<td>SEE</td>
	<td>
	<form><input type="text" name="see"></form>	
	</td>
</tr>
<tr>
	<td>SCIENCE</td>
	<td>
	<form><input type="text" name="science"></form>	
	</td>
</tr>
<tr>
	<td></td>
	<td>
	<form><input type="button" name="calculate" value="calculate" onclick="myFunction"></form>	
	</td>
</tr>
<tr id="me">
	<td>TOTAL MARKS</td>
	<td>
	<?php echo "$total";?>
	</td>
</tr>
<tr>
	<td>AVERAGE</td>
	<td>
		
	</td>
</tr>
<tr>
	<td>GRADE</td>
	<td>
	
	</td>
</tr>
</table>
</form>
</body>
</html>
