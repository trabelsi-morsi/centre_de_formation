<div id="page_content_inner">
<div class="md-card">
<div class="md-card-content large-padding">
<h3 class="heading_a">Nouveau diplome</h3></br>
    <form id="form_validation" class="uk-form-stacked" method="POST" enctype="multipart/form-data" action='index.php?controller=diplome&action=ajout' >
         <div class="uk-grid" data-uk-grid-margin="">

         		<div class="uk-width-medium-1-2">
                     <div class="uk-form-row">
                             

                               <div class="uk-width-medium-1-2">
	                                <div class="parsley-row">
	                                    <div class="md-input-wrapper"><label for="fullname">SCORE<span class="req">*</span></label><input type="number" name="score" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>    
	                                </div>
                     			 </div>

                     		<div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">MENTION<span class="req">*</span></label><input type="text" name="mention" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><label for="val_birth">Date<span class="req">*</span></label><input type="text" name="datee" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="uk-form-row">
                                
                              <label for="val_select" class="uk-form-label">INSCRIPTION</label>
                               <select id="val_select" required data-md-selectize name="id_ins">
                                    <OPTION value=""></OPTION>
                                         <?php
                                                              
                                           foreach ($variable as $res2) {

                                             echo ' <OPTION value="'.$res2->id_ins.'"> '.$res2->nom.' '.$res2->prenom.' ('.$res2->des_grp.') </OPTION> ' ;
                                            }
                                          ?>
                                 </select> 
                           </div>
                    </div>
                     <br><br>
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div>
                        </div></div></div>
                    </form>
                </div>
 </div></div>