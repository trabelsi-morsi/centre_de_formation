<div id="page_content_inner">
<div class="md-card">
<div class="md-card-content large-padding">
<?php 
    foreach ($tableau as $tab ) {
?>
	<h3 class="heading_a">Modification d'une inscription</h3>
                        </br>
    <form id="form_validation" class="uk-form-stacked" method="POST" enctype="multipart/form-data" action="index.php?controller=inscription&action=modif&id_ins=<?php echo $tab->id_ins; ?>" >
       
       <div class="uk-grid" data-uk-grid-margin="">

       			<div class="uk-width-medium-1-2">
                                <div class="uk-form-row">
                                
                              <label for="val_select" class="uk-form-label">ETUDIANT</label>
                               <select id="val_select" required data-md-selectize name="id_etd">
                                    <OPTION value=""></OPTION>
                                          <?php
                                               foreach ($variable as $res2) {
                                                    $selected="";

                                                     if($tableau[0]->id_etd==$res2->id_etd)
                                                       {
                                                           $selected="selected";
                                                       }
												 echo ' <OPTION '.$selected.' value="'.$res2->id_etd.'"> '.$res2->nom.' '.$res2->prenom.'</OPTION> ' ;
                                                 }
                                         ?>
                                 </select> 
                           </div>
                    </div>


                    <div class="uk-width-medium-1-2">
                    <label for="val_select" class="uk-form-label">GROUPE</label>
                                <div class="uk-form-row">
                                
                              
                               <select id="val_select" required data-md-selectize name="id_grp">
                                    <OPTION value=""></OPTION>
                                          <?php
                                               foreach ($variable2 as $res2) {
                                                    $selected="";

                                                     if($tab->id_grp==$res2->id_grp)
                                                       {
                                                           $selected="selected";
                                                       }
												  echo ' <OPTION '.$selected.' value="'.$res2->id_grp.'"> '.$res2->des_grp.'</OPTION> ' ;
                                                 }
                                         ?>
                                 </select> 
                           </div>
                    </div>

                    <div class="uk-width-medium-1-2">
                    <label for="fullname">PRIX FINAL<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <input type="number" name="prixfinal" value="<?php echo  $tab->prixfinal;?>" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span>  
                                </div>
                      </div>

                      <div class="uk-width-medium-1-2">
                      <label for="fullname">REMISE<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <input type="number" name="remise" required="" value="<?php echo  $tab->remise;?>" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span>   
                                </div>
                      </div>

                        <br><br>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div></div>
                    </form>
                     <?php 
        }
        ?> 
                </div>
 </div></div>

