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


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=test_extraction.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader)."\n".$setData."\n";
?>


