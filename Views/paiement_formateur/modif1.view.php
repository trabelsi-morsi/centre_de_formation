
<form method='post' enctype="multipart/form-data"  action='index.php?controller=paiement_formateur&action=modif'>
<div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Modification d'une formation</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1">
                        <div class="uk-form-row">
                                                      <label for="val_select" class="uk-form-label">Groupe</label>
                                                        <select id="val_select" required data-md-selectize name="id_grp">
                                                         <OPTION value=""></OPTION>
                                                                <?php
                                                                    foreach ($variable as $res) {
                                                                        $selected="";

                                                                        if($tab[0]->id_grp==$res->id_grp)
                                                                        {
                                                                            $selected="selected";
                                                                                
                                                                        }

                                                                            echo " <OPTION ".$selected." value='".$res->id_grp."'> ".$res->des_grp."</OPTION> " ;
                                                        
                                                                    }
                                                                   ?>
                                                      </select> 
                                            </div><br/>

                            <div class="uk-input-group">
                        		<span class="uk-input-group-addon"><i style="color: #e02631;" class="uk-input-group-icon uk-icon-cog"></i></span>
                                <label>Montant</label>
                                <input type="text" name='montant' value="<?php echo $tab[0]->montant; ?>" class="md-input"  />

                             </div>
                             <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i style=""  class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <div class="md-input-wrapper"><label for="uk_dp_1">Date de paiement</label><input value="<?php echo $tab[0]->datee; ?>" name='datee' class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY-MM-DD'}"><span class="md-input-bar"></span></div>
                                        
                                    </div>
                             <div class="uk-form-row">
                                    <button type="submit" style="float:right;" value='modifier' class="md-btn md-btn-primary">Modifier</button>
                                </div>

                             </div>
                             </div>
                             </div>
                             </div>
                             </div>

<input type='hidden' name='id_pai' value="<?php echo $tab[0]->id_pai; ?>" >


</form>



 
	 