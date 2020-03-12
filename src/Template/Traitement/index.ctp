<!--<?php

//var_dump($_GET);

//echo $_GET['Mois'];


?>-->
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
  $this->assign('title', 'Visualisation');  
?>
<?= $this->Html->css('base') ?>
<script type="text/javascript">
var date_debut = sessionStorage.getItem("Date_Debut");
var date_fin = sessionStorage.getItem("Date_Fin");
/*
function select_in_BDD()
{
	var sql = window.SQL;
	var db = new sql.Database('localhost', 'root','','extraction_bdd_to_xls');
	var res = db.exec("SELECT * FROM `test` WHERE capteur='A2' AND date BETWEEN '2017-04-05' AND '2017-04-08'");
	while(data = mysqli_fetch_row(res)){
				echo '
				<tr>
					<td>'+data[0]+'</td>
					<td>'+data[1]+'</td>
					<td>'+data[2]+'</td>
				</tr>
				';
}
*/
</script>

<input type="button" name="lien1" value="Home" onclick="self.location.href='Homes'" style="background-color:#6943D0" style="color:white; font-weight:bold"onclick>
<title>Visualisation</title>								
			<?php 
			
			$j = intval($_GET['Jour']);
$m = intval($_GET['Mois']);
$a = intval($_GET['Année']);

$jf = intval($_GET['Jour2']);
$mf = intval($_GET['Mois2']);
$af = intval($_GET['Année2']);
//var_dump($_GET);

$con = mysqli_connect('localhost','root','','extraction_bdd_to_xls');
if (!$con) {
    die('Could not connect base: ' . mysqli_error($con));
}
//var_dump($con);
$date1 = "$a-$m-$j";
$date2 = "$af-$mf-$jf";
mysqli_select_db($con,"test");
$sql="SELECT * FROM `test` WHERE capteur='A2' AND date BETWEEN '".$date1."' AND '".$date2."'";

$result = mysqli_query($con,$sql);
//var_dump($result);
echo "<table>
<tr>
<th>Capteur</th>
<th>Valeur</th>
<th>Date</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Capteur'] . "</td>";
    echo "<td>" . $row['Valeur'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
			?>
			
		</table>
		
		<input type="button" name="lien1" value="Précédent" onclick="self.location.href='Recapitulatifs'" style="background-color:#6943D0" style="color:white; font-weight:bold"></br>

		<input type="button" name="envoyer" value="export_to_xls" onclick="self.location.href='Export_xls'" ></br>

</body>
</html>