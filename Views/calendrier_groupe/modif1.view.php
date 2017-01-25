
<form method='post' enctype="multipart/form-data"  action='index.php?controller=calendrier_groupe&action=modif'>
<div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Modification d'un calendrier groupe </h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">

                        
                        <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Groupe</label>
                                                        <select id="val_select" required data-md-selectize name="id_grp">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                                    foreach ($groupes as $res) {
                                                                        $selected="";

                                                                        if($tab[0]->id_grp==$res->id_grp)
                        	                                              {
                                                                            $selected="selected";
                                                                                
                                                                        }

                                                                            echo " <OPTION ".$selected." value='".$res->id_grp."'> ".$res->des_grp."</OPTION> " ;
                                                        
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
                                                                        $selected="";

                                                                        if($tab[0]->id_cal==$res->id_cal)
                        	                                              {
                                                                            $selected="selected";
                                                                                
                                                                        }

                                                                            echo " <OPTION ".$selected." value='".$res->id_cal."'> ".$res->datee." ".$res->heuredeb.':00'."</OPTION> " ;
                                                        
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
                                                                        $selected="";

                                                                        if($tab[0]->id_salle==$res->id_salle)
                        	                                              {
                                                                            $selected="selected";
                                                                                
                                                                        }

                                                                            echo " <OPTION ".$selected." value='".$res->id_salle."'> ".$res->nom."</OPTION> " ;
                                                        
                                                                    }
                                                                   ?>
                                                      </select> 
                                            </div>

                                           <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='modifier' class="md-btn md-btn-primary">Modifier</button>
                                </div>
                                            </div>
                                            
                                



                            

                             
                             </div>
                             </div>
                             </div>
                             </div>

<input type='hidden' name='id_cg' value="<?php echo $tab[0]->id_cg; ?>" >


</form>



 
	 