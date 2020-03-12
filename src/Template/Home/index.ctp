<?php
/**
  * @var \App\View\AppView $this
  */
  $this->assign('title', 'Home');
  $valeur='';
?>
<?= $this->Html->css('base') ?>
      <table>
         <tr>
            <td>
               <section class="temp_elec">
                  <div id="instructions">
                  </div>
                  <div id="consommation">
                  <table id="table_conso">
                     <tr>
                        <td>Sélection type capteur :</td>
                     </tr>
                     <tr>
                        <td><?= $this->Html->image('capt_ambiant.png');?><input type="radio" name="capteur" class="button" onClick="self.location.href='CapteurAmbiants'" value="capt_ambiant" id="capt_ambiant" /> <label for="capt_ambiant">Capteur ambiant</button></td>			    
				<td><?= $this->Html->image('capt_muraux.png');?><input type="radio" name="capteur" class="button" onClick="self.location.href='CapteurMuraux'" value="capt_muraux" id="capt_muraux" /> <label for="capt_muraux">Capteur muraux</button></td>
				
                     </tr>
                     <tr>
                        <td></td>
                     </tr>
                     <tr>
                        <!--<td><?= $this->Html->image('consommation_chauffage.png');?><input type="radio" name="capteur" class="button" onClick="self.location.href='ConsommationChauffage'" value="consommation_chauffage" id="consommation_chauffage" /> <label for="consommation_chauffage">Consommation <br/>Chauffage</label><br /></td>-->				
				<td><?= $this->Html->image('puit.png');?><input type="radio" name="capteur" class="button" onClick="self.location.href='Puit'" value="puit" id="puit" /> <label for="puit">Puit</label><br /></td>
				
                     </tr>
                     <tr>
                        <div id="meteo_yahoo">
                        </div>
                     </tr>
                      
                  </table>
                  <br />
                  </div>
               </section>
            </td>
            <td>
               <section id="section_index">

                  <?= $this->Html->image('capteurs.png', ['id' => 'img_capteurs']);?>
                  <table class="bouton_tableau" >
                     <tr>
                  </table>
               </section>
            </td>
         </tr>
      </table>
      <footer>
         <p>
         <span class="logos">
            
         </span>	
            <span class="author">	       	
            </span>
            </p>
         
      </footer>
