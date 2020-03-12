<html>
<?php
  $this->assign('title', 'Récapitulatif');
?>
<?= $this->Html->css('base') ?>
<script type="text/javascript">
            function afficher() {
            	var date_debut = sessionStorage.getItem("Date_Debut");
            	var date_fin = sessionStorage.getItem("Date_Fin");
            	var Type_mesure = sessionStorage.getItem("Type_Mesure");
            	var Type_Capteur = sessionStorage.getItem("Val_Type_Capteur");
            	var Lieu = sessionStorage.getItem("Lieu");
            	var Periode = date_debut+"   au  "+date_fin;
            	//alert(date_debut+"  au  "+date_fin);            	
				document.getElementById('periode').innerHTML = Periode;
				document.getElementById('type_mesure').innerHTML = Type_mesure;
				document.getElementById('capteur').innerHTML = Type_Capteur;
				document.getElementById('emplacement').innerHTML = Lieu;
				
            }
            
            var page_precedente = sessionStorage.getItem("Page");
</script>
<body onload="afficher()">
<input type="button" name="lien1" value="Home" onclick="self.location.href='Homes'"  font-weight:bold">
<title>Récapitulatif</title>
								
		<table border="1">				
				<tr>
					<th width="300">Récapitulatif</th>
				</tr>
				<tr>
				<td width="500">
				<p><br /><p id="emplacement"></p></p>	
				<p><br /><p id="capteur"></p><br /></p>	
					
				<p><br /><p id="type_mesure"></p><br /></p>
				
				<p><br /><p id="periode"></p><br /></p>
				
				</td>				
				</tr>
		</table>
<!--<input type="button" name="lien1" value="Test" onclick="afficher()" font-weight:bold">-->
<form action="Visualisation">
<input type="button" name="lien1" value="Précédent" onclick="self.location.href=page_precedente"  font-weight:bold">
<input type="submit" name="lien1" value="Visualisation" font-weight:bold">
</form>	
</body>
</html>