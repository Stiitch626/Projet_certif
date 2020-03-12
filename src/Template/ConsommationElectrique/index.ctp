<?php
  $this->assign('title', 'Sélection');
  
?>
<?= $this->Html->css('base.css') ?>
<input type="button" name="lien1" value="Home" onclick="self.location.href='Homes'" style="background-color:#6943D0" style="color:white; font-weight:bold"onclick>
													
		<table>
				<tr>
					<th width="300">Lieu désiré</th>
				</tr>
				<tr>
				
				<form action="">
					<td><input type="radio" name="valeur" value="Ancienne_Ecole" id="Ancienne_Ecole" /> <label for="Ancienne_Ecole">Ancienne Ecole</label><br />
					<input type="radio" name="valeur" value="Extension_Ecole" id="Extension_Ecole" /> <label for="Extension_Ecole">Extension Ecole</label><br /></td>
					<td><input type="radio" name="valeur" value="Micro_Crêche" id="Micro_Crêche" /> <label for="Micro_Crêche">Micro Crêche</label><br /></td>
				</form>
								
				</tr>
		</table>
		<table>
				<tr>
					<th width="400">Période</th>
				</tr>
				<tr>
				<td>
								
			<label for="jour">Du :</label>
			<select name="jour" id="jour">
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
					<option value="12">13</option>
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
				
			<select name="année" id="année">
				<optgroup>
					<option value="AAAA">AAAA</option>
					<option value="1">2009</option>
					<option value="2">2010</option>
					<option value="3">2011</option>
					<option value="4">2012</option>
					<option value="5">2013</option>
					<option value="6">2014</option>
					<option value="7">2015</option>
					<option value="8">2016</option>
					<option value="9">2017</option>
				</optgroup>
			</select>	
				</td>
				<td>
			<label for="jour">Au :</label>
			<select name="jour" id="jour">
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
					<option value="12">13</option>
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
				
			<select name="année" id="année">
				<optgroup>
					<option value="AAAA">AAAA</option>
					<option value="1">2009</option>
					<option value="2">2010</option>
					<option value="3">2011</option>
					<option value="4">2012</option>
					<option value="5">2013</option>
					<option value="6">2014</option>
					<option value="7">2015</option>
					<option value="8">2016</option>
					<option value="9">2017</option>
				</optgroup>
			</select>	
				</td>				
				</tr>
		</table>
		
<input type="button" name="lien1" value="Précédent" onclick="self.location.href='Homes'" style="background-color:#6943D0" style="color:white; font-weight:bold"onclick>
<input type="button" name="lien1" value="Suivant" onclick="self.location.href='Recapitulatifs'" style="background-color:#6943D0" style="color:white; font-weight:bold"onclick>