<?php
  $this->assign('title', 'Sélection');
  
?>
<?= $this->Html->css('base.css') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
function return_selection(){
            	//Défini le type de mesure
	            var type_mesure = "Type Mesure : Température";
	            //Défini la page actuelle	
	            var page = "ConsommationChauffage";
	            //Défini le lieu
				var lieu = "Lieu : "+ $('input[name=valeur]:checked').val();            
	           		var capteur="";	
				//récupére le jour de début de la période
	            var select_jour = document.getElementById("Jour");
				var choix_jour = select_jour.selectedIndex;
				var valeur_jour = select_jour.options[choix_jour].value;								
				document.getElementById('Jour').value = valeur_jour;
	            
	            //récupére le jour de début de la période
	            var select_jour = document.getElementById("Jour");
				var choix_jour = select_jour.selectedIndex;
				var valeur_jour = select_jour.options[choix_jour].value;								
				document.getElementById('Jour').value = valeur_jour;
				
				//récupére le mois de début de la période	
				var select_mois = document.getElementById("Mois");
				var choix_mois = select_mois.selectedIndex;
				var valeur_mois = select_mois.options[choix_mois].value;								
				document.getElementById('Mois').value = valeur_mois;
				
				//récupére l'année de début de la période
				var select_annee = document.getElementById("Année");
				var choix_annee = select_annee.selectedIndex;
				var valeur_annee = select_annee.options[choix_annee].value;								
				document.getElementById('Année').value = valeur_annee;
				
				//regroupe le jour le mois et l'année
				date_debut=valeur_jour+"-"+valeur_mois+"-"+valeur_annee;
				
				//récupére le jour de fin de la période
	            var select_jour_fin = document.getElementById("Jour2");
				var choix_jour_fin = select_jour_fin.selectedIndex;
				var valeur_jour_fin = select_jour_fin.options[choix_jour_fin].value;								
				document.getElementById('Jour2').value = valeur_jour_fin;
				
				//récupére le mois de fin de la période	
				var select_mois_fin = document.getElementById("Mois2");
				var choix_mois_fin = select_mois_fin.selectedIndex;
				var valeur_mois_fin = select_mois_fin.options[choix_mois_fin].value;								
				document.getElementById('Mois2').value = valeur_mois_fin;
				
				//récupére l'année de fin de la période
				var select_annee_fin = document.getElementById("Année2");
				var choix_annee_fin = select_annee_fin.selectedIndex;
				var valeur_annee_fin = select_annee_fin.options[choix_annee_fin].value;								
				document.getElementById('Année2').value = valeur_annee_fin;
				
				//regroupe le jour le mois et l'année
				var date_debut="Période : "+valeur_jour+"-"+valeur_mois+"-"+valeur_annee;
				var date_fin=valeur_jour_fin+"-"+valeur_mois_fin+"-"+valeur_annee_fin;
				
				
				//Stocke les valeurs dans des sessions pour permettre la récupération sur la page suivante
				sessionStorage.setItem("Date_Debut",date_debut);
				sessionStorage.setItem("Date_Fin",date_fin);
				sessionStorage.setItem("Type_Mesure",type_mesure);
				sessionStorage.setItem("Page",page);
				sessionStorage.setItem("Lieu",lieu);
				sessionStorage.setItem("Val_Type_Capteur",capteur);		
				//Affichage de test				
				/*alert (valeur_capteur);
				alert(date_debut+"   au   "+date_fin);*/	
									
			}
			     </script>
<input type="button" name="lien1" value="Home" onclick="self.location.href='Homes'" style="background-color:#6943D0" style="color:white; font-weight:bold"onclick>
													
		<table>
				<tr>
					<th width="300">Lieu désiré</th>
				</tr>
				<tr>
				
				<form action="">
					<td><input type="radio" name="valeur" value="Ancienne Ecole" id="Ancienne_Ecole" /> <label for="Ancienne_Ecole">Ancienne Ecole</label><br />
					<input type="radio" name="valeur" value="Extension Ecole" id="Extension_Ecole" /> <label for="Extension_Ecole">Extension Ecole</label><br /></td>
					<td><input type="radio" name="valeur" value="Micro Crêche" id="Micro_Crêche" /> <label for="Micro_Crêche">Micro Crêche</label><br /></td>
				</form>
								
				</tr>
		</table>
		<table id="zoneP">
				<tr>
					<th width="300">Période</th>
				</tr>
				<tr>
				<td>
								
			<label for="jour">Du :</label>
			<select name="Jour" id="Jour">
				<optgroup>
					<option value="JJ">JJ</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</optgroup>
			</select>
			
			<select name="Mois" id="Mois">
				<optgroup>
					<option value="MM">MM</option>
					<option value="1">Janvier</option>
					<option value="2">février</option>
					<option value="3">mars</option>
					<option value="4">avril</option>
					<option value="5">mai</option>
					<option value="6">juin</option>
					<option value="7">juillet</option>
					<option value="8">aout</option>
					<option value="9">septembre</option>
					<option value="10">octobre</option>
					<option value="11">novembre</option>
					<option value="12">décembre</option>
				</optgroup>
				</select>
				
			<select name="Année" id="Année">
				<optgroup>
					<option value="AAAA">AAAA</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
				</optgroup>
			</select>	
				</td>
				<td>
			<label for="jour">Au :</label>
			<select name="Jour2" id="Jour2">
				<optgroup>
					<option value="JJ">JJ</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					
				</optgroup>
			</select>
			
			<select name="Mois2" id="Mois2">
				<optgroup>
					<option value="MM">MM</option>
					<option value="1">Janvier</option>
					<option value="2">février</option>
					<option value="3">mars</option>
					<option value="4">avril</option>
					<option value="5">mai</option>
					<option value="6">juin</option>
					<option value="7">juillet</option>
					<option value="8">aout</option>
					<option value="9">septembre</option>
					<option value="10">octobre</option>
					<option value="11">novembre</option>
					<option value="12">décembre</option>
				</optgroup>
				</select>
				
			<select name="Année2" id="Année2">
				<optgroup>
					<option value="AAAA">AAAA</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
				</optgroup>
			</select>	
				</td>				
				</tr>
		</table>
		
<input type="button" name="lien1" value="Précédent" onclick="self.location.href='Homes'" style="background-color:#6943D0" style="color:white; font-weight:bold">
<input type="button" name="lien1" value="Suivant" onclick="self.location.href='Recapitulatifs';return_selection()" style="background-color:#6943D0" style="color:white; font-weight:bold">