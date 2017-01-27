 

<form method='post' enctype="multipart/form-data" action='index.php?controller=formateur&action=ajout'>

        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Ajout d'un nouveau formateur</h3>
                    <div class="uk-grid" data-uk-grid-margin>


                     <div class="uk-width-medium-1">
                                             
                                            
                                 </div>
                        <div class="uk-width-medium-1-2">

                         <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Type de Formation</label>
                                                        <select id="val_select" required data-md-selectize name="id_type">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                              
                                                                        foreach ($variable as $res) {

                                                                            echo ' <OPTION value="'.$res->id_type.'"> '.$res->des_type.'</OPTION> ' ;
                                                                }
                                                               ?>
                                                      </select> 
                                                  </div>
                        	<div class="uk-form-row">
                                <label>Cin</label>
                                <input type="number"  required name='cin' class="md-input"  />

                             </div>
                             <div class="uk-form-row">
                                <label>Nom</label>
                                <input type="text"  name='nom' class="md-input"  />

                             </div>
                            <br>
                            
                                 <div class="uk-form-row">
                                <label>Prenom</label>
                                <input type="text"  name='prenom' class="md-input"  />

                             </div>
                             <div class="uk-form-row">
                                <label>Téléphone</label>
                                <input type="text"  name='tel' class="md-input"  />
                            </div> 
                             

						</div>

                        <div class="uk-width-medium-1-2">
                           
                           <div class="uk-form-row">
                                <label>Adresse E-Mail</label>
                                <input type="text"   name='mail' class="md-input"  />
                            </div><br/>
                           <div class="uk-width-medium-1">
                                <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><label for="val_birth">Date de naissance<span class="req">*</span></label><input type="text" name="date_naiss" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            <div class="uk-width-1-1">
                            <label>Photo</label>
                            <div id="file_upload-drop" class="uk-file-upload">
                                <p class="uk-text">Déposer le fichier</p>
                                <p class="uk-text-muted uk-text-small uk-margin-small-bottom">ou</p>
                                <a class="uk-form-file md-btn">Choisir le fichier<input name='photo' id="file_upload-select" type="file"></a>
                            </div>

                            <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                <div class="uk-progress-bar" style="width:0">0%</div>
                            </div>
                            </div>
                              <br/>
                        <div class="uk-form-row">
                                <label>Frais/Heure</label>
                                <input type="number" min ="1"  name='fraisheure' class="md-input"  />

                            </div>

                           
                            <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='ajouter' class="md-btn md-btn-primary">Ajouter</button>
                                </div>


                        </div>
					</div>
				</div>
			</div>
		</div>






</form>



 
	 