<!DOCTYPE HTML>
<!--
Author : Alvin Ramadhan
NIM	   : 1611500032
-->
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center>
	<body>
	<h2>Hidden Markov Model</h2><br>
	<hr width='80%'><i>*Masukkan jumlah Sequence dan Kolom</i>
	<br><br>
	<table border='0'>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
		<tr><td><h3>sequence</h3></td><td><input type="number" min="1" name="seq" required></td></tr>
		<tr><td><h3>column</h3></td><td><input type="number" min="1" name="col" required></td></tr>
		<tr><td ><input type="submit" value="start" name="ok"></td></tr>
	</form>
	</table>
	<br><br>
	<hr width='80%'><i>*Masukkan isi kolom contoh <b>(com pew - ter & com pi oh tah)</b></i>

<?php
if (isset($_POST['ok'])){
	$seq=$_POST['seq'];
	$col=$_POST['col'];
	echo "<h3><b>sequence = $seq<br>column = $col<br><br></b></h3>";
	
echo"

<form method='POST' action='index.php'>
<input type='hidden' value='$seq' name='seq_'>
<input type='hidden' value='$col' name='col_'>
";
		echo "<table border='0' >";
			$a=1;
			while($a<=$seq) {
				echo "<tr><td><b>Sequence $a<b></td>";
							for($b=1;$b<=$col;$b++)
							echo"
							<td>
								<input type='text' required name='seq[$a][$b]'>
	
							</td>";
				echo "</tr>";
					
				$a++;
				}
					
		
	
echo"
<tr><td colspan='2'><input type='submit' value='proses' name='proses'></td></tr>
</table>
</form>
</center>";
}
	else if (isset($_POST['proses'])){
	$seq_=$_POST['seq_'];
	$cols=$seq_+2;
	$col_=$_POST['col_'];
	$jml=$seq_*$col_;
	
	echo"<br><br>jml:$jml<br>col:$col_<br>seq:$seq_<br><br><br><br>";
	echo "<table border='1' >";
	echo "<tr><td rowspan='$cols'><b>START</b></td></tr>";
	$a=1;
	while($a<=$seq_){
		echo"<tr align='center'>";
			$b=1;
			while($b<=$col_){
				$seq=$_POST['seq'];
				
						echo "<td>";
						echo $seq[$a][$b];
						echo "</td>";
						
			$b++;
			}
			
			if($a==1){
						echo "<td rowspan='$cols'><b>END</b></td>";
					}
				
	echo "</tr>";
	$a++;
	}
	//echo "<tr>";
		//	$r=1;
		//	while($r<=$col_){
			//	echo"<td>";
			//		echo"hasil";
			//	echo"</td>";
		//	$r++;
	//		}
	echo //"</tr>
	"</table>";

}



?>
		</center>
	</body>
</html>