

<form method='post' enctype="multipart/form-data" action='index.php?controller=calendrier_groupe&action=ajout'>

 <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'un nouveau calendrier groupe </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">
                            

                           	 					<div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Groupe</label>
                                                        <select id="val_select" required data-md-selectize name="id_grp">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($groupes as $res) {

                                                                            echo ' <OPTION value="'.$res->id_grp.'"> '.$res->des_grp.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>
                                                  <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Calendrier</label>
                                                        <select id="val_select" required data-md-selectize name="id_cal">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($calendriers as $res) {

                                                                            echo ' <OPTION value="'.$res->id_cal.'"> '.$res->datee.' '.$res->heuredeb.':00'.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>
                                                  <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Salle</label>
                                                        <select id="val_select" required data-md-selectize name="id_salle">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($salles as $res) {

                                                                            echo ' <OPTION value="'.$res->id_salle.'"> '.$res->nom.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>

                                                  <br/>
<div class="uk-form-row">
                                  <button type="submit" style="float:right;" value='ajouter' class="md-btn md-btn-primary">Ajouter</button>
                                </div> 
                        	
  </div>   
                                       
</div>
</div>
</div>
</div>




</form>

