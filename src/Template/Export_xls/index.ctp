<?php
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'extraction_bdd_to_xls');  

$setSql = "SELECT `id`,`numero`,`ref` FROM `test`";
$setRec = mysqli_query($conn,$setSql);

$columnHeader ='';
$columnHeader = "id"."\t"."numero"."\t"."ref"."\t";


$setData='';

while($rec = mysqli_fetch_row($setRec))  
{
  $rowData = '';
  foreach($rec as $value)
  {
    $value = '"' . $value . '"' . "\t";
    $rowData .= $value;
  }
  $setData .= trim($rowData)."\n";
}
$datestamp = date("Y-m-d");  
$filename = $datestamp."_table.xls"; 

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

//echo ucwords($columnHeader)."\n".$setData."\n";

?>
		<table border="1">
				<tr>
					<th>id</th>
					<th width="120">numero</th>
					<th>ref</th>
				</tr>
			<?php 
			$conn = new mysqli('localhost', 'root', '');  
            mysqli_select_db($conn, 'extraction_bdd_to_xls');  
			
			$sql = mysqli_query($conn,"SELECT * FROM `test`");			

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

