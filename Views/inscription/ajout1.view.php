<div id="page_content_inner">
<div class="md-card">
<div class="md-card-content large-padding">
<h3 class="heading_a">Nouvelle inscription</h3></br>
    <form id="form_validation" class="uk-form-stacked" method="POST" enctype="multipart/form-data" action='index.php?controller=inscription&action=ajout' >
         <div class="uk-grid" data-uk-grid-margin="">

         		<div class="uk-width-medium-1-2">
                                <div class="uk-form-row">
                                
                              <label for="val_select" class="uk-form-label">ETUDIANT</label>
                               <select id="val_select" required data-md-selectize name="id_etd">
                                    <OPTION value=""></OPTION>
                                         <?php
                                                              
                                           foreach ($variable as $res2) {

                                             echo ' <OPTION value="'.$res2->id_etd.'"> '.$res2->nom.' '.$res2->prenom.'</OPTION> ' ;
                                            }
                                          ?>
                                 </select> 
                           </div>
                    </div>
               
                <div class="uk-width-medium-1-2">
                                <div class="uk-form-row">
                                
                              <label for="val_select" class="uk-form-label">GROUPE</label>
                               <select id="val_select" required data-md-selectize name="id_grp">
                                    <OPTION value=""></OPTION>
                                         <?php
                                                              
                                           foreach ($variable2 as $res) {

                                             echo ' <OPTION value="'.$res->id_grp.'"> '.$res->des_grp.'</OPTION> ' ;
                                            }
                                          ?>
                                 </select> 
                           </div>
                    </div>


                    <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">PRIX FINAL<span class="req">*</span></label><input type="number" name="prixfinal" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>    
                                </div>
                      </div>

                      <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">REMISE<span class="req">*</span></label><input type="number" name="remise" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>    
                                </div>
                      </div>
         
                   <br><br>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
 </div>