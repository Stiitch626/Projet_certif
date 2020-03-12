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

<input type="button" name="lien1" value="Home" onclick="self.location.href='Homes'" font-weight:bold"onclick>
<title>Visualisation</title>								
		<table border="1">
				<tr>
					<th>Capteur</th>
					<th width="120">Valeur</th>
					<th>Date</th>
				</tr>
				
			<?php 
			
			$conn = new mysqli('localhost', 'root', '');  
            mysqli_select_db($conn, 'extraction_bdd_to_xls');  
			
			$sql = mysqli_query($conn,"SELECT * FROM `test` WHERE capteur='A2' AND date BETWEEN '2017-04-05' AND '2017-04-08'");
			

			while($data = mysqli_fetch_row($sql)){
				echo '
				<tr>
					<td>'.$data[0].'</td>
					<td>'.$data[1].'</td>
					<td>'.$data[2].'</td>
				</tr>
				';
			}
			?>
			
		</table>
		
		<input type="button" name="lien1" value="Précédent" onclick="self.location.href='Recapitulatifs'" font-weight:bold"></br>

		<input type="button" name="envoyer" value="export_to_xls" onclick="self.location.href='Export_xls'" ></br>
