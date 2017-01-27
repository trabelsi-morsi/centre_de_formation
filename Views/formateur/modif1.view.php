
<form method='post' enctype="multipart/form-data"  action='index.php?controller=formateur&action=modif'>
<div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Modification d'un formateur</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Type de formation</label>
                                                        <select id="val_select" required data-md-selectize name="id_type">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                                    foreach ($variable as $res) {
                                                                        $selected="";

                                                                        if($tab[0]->id_type==$res->id_type)
                                                                        {
                                                                            $selected="selected";
                                                                                
                                                                        }

                                                                            echo " <OPTION ".$selected." value='".$res->id_type."'> ".$res->des_type."</OPTION> " ;
                                                        
                                                                    }
                                                                   ?>
                                                      </select> 
                                            </div>
                            <div class="uk-form-row">
                                <label>Cin</label>
                                <input type="text"  name='cin' value="<?php echo $tab[0]->cin; ?>"  class="md-input"  />

                             </div>
                             <div class="uk-form-row">
                                <label>Nom</label>
                                <input type="text"   name='nom' value="<?php echo $tab[0]->nom; ?>" class="md-input"  />

                             </div>
                            <br>
                            <div class="uk-width-medium-1">
                                             
                                             
                            </div>

                            <br>
                            <div class="uk-form-row">
                                <label>Prenom</label>
                                <input type="text"  value="<?php echo $tab[0]->prenom; ?>" name='prenom' class="md-input"  />

                             </div>
                             
                             <div class="uk-form-row">
                                <label>Téléphone</label>
                                <input type="text"  value="<?php echo $tab[0]->tel; ?>" name='tel' class="md-input"  />
                            </div>


                                



<input type='hidden' name='id_formateur' value='<?php echo $tab[0]->id_formateur; ?>' >


</div>
 <div class="uk-width-medium-1-2">
                        <div class="uk-form-row">
                                <label>Adresse E-Mail</label>
                                <input type="text"  value="<?php echo $tab[0]->mail; ?>" name='mail' class="md-input"  />
                            </div><br/>
                            <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i style="color: #e02631; "  class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1"></label><input value="<?php echo $tab[0]->date_naiss; ?>" name='date_naiss' class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar"></span></div>
                                        
                                    </div>
                        <div class="uk-width-1-1">
                            <label>Photo</label>
                            <div id="file_upload-drop" class="uk-file-upload">
                                <p class="uk-text">Déposer le fichier</p>
                                <p class="uk-text-muted uk-text-small uk-margin-small-bottom">ou</p>
                                <a class="uk-form-file md-btn">Choisir le fichier<input name='photo' value="<?php echo $tab[0]->photo; ?>" id="file_upload-select" type="file"></a>
                            </div>
                            <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                <div class="uk-progress-bar" style="width:0">0%</div>
                            </div>
                        </div>
                         <div class="uk-form-row">
                                <label>Frais/heure</label>
                                <input type="number" min ="1" value="<?php echo $tab[0]->fraisheure; ?>" name='fraisheure' class="md-input"  />

                            </div>

                           
                            <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='modifier' class="md-btn md-btn-primary">Modifier</button>
                                </div>

 </div>
</div>
</div>
</div>
</div>

</form>



 
	 