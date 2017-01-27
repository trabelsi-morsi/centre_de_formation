<div id="page_content_inner">
<div class="md-card">
<div class="md-card-content large-padding">
		<?php 
		foreach ($tableau as $tab ) {
			$pic=$tab->photo;

		 ?>
		 <form method="post" action="index.php?controller=etudiant&action=modif&id_etd=<?php echo $tab->id_etd; ?>&pic=<?php echo $pic ?>" enctype="multipart/form-data">
         <label for="fullname">NOM<span class="req">*</span></label>
                        <div class="uk-grid" data-uk-grid-margin="">

                            <div class="uk-width-medium-1-2">
                            
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><input type="text" name="nom" required="" class="md-input" data-parsley-id="4" value="<?php echo  $tab->nom;?>"><span class="md-input-bar"></span></div>
                                </div>
                            </div>

                             <div class="uk-width-medium-1-2">
                             <label for="fullname">PRENOM<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><input type="text" name="prenom" required="" class="md-input" data-parsley-id="4" value="<?php echo  $tab->prenom;?>"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                            <label for="fullname">CIN<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><input type="text" name="cin" required="" class="md-input" data-parsley-id="4" value="<?php echo  $tab->cin;?>"><span class="md-input-bar"></span></div>    
                                </div>
                            </div>

                             <div class="uk-width-medium-1-2">
                             <label for="val_birth">Date de naissance<span class="req">*</span></label>
                                <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><input type="text" name="date_naiss" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8" value="<?php echo  $tab->date_naiss;?>"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                            <label for="email">Email<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><input type="email" name="mail" data-parsley-trigger="change" required="" class="md-input" data-parsley-id="6" value="<?php echo  $tab->mail;?>"><span class="md-input-bar" ></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                            <label for="fullname">TELEPHONE<span class="req">*</span></label>
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><input type="text" name="tel" required="" class="md-input" data-parsley-id="4" value="<?php echo  $tab->tel;?>"><span class="md-input-bar"></span></div>    
                                </div>
                            </div>



                            <div class="uk-width-1-1">
                            <div class="uk-form-file md-btn md-btn-primary">
                                PHOTO
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" name="photo" type="file"></div>.
                            <img src='images/<?php echo $tab->photo;?>' width=70px height=50px/></br></br>
                   			<div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div>
                        </div>
                        </div></form>
                        <?php 
		}
		?> 
		</div></div></div>
         