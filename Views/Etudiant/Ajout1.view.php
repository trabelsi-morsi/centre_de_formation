<div id="page_content_inner">  
<div class="md-card">
<div class="md-card-content large-padding">
                    <form id="form_validation" class="uk-form-stacked" method="POST" enctype="multipart/form-data" action="index.php?controller=etudiant&action=ajout" >
                        <div class="uk-grid" data-uk-grid-margin="">
                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">NOM<span class="req">*</span></label><input type="text" name="nom" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                             <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">PRENOM<span class="req">*</span></label><input type="text" name="prenom" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">CIN<span class="req">*</span></label><input type="text" name="cin" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>    
                                </div>
                            </div>

                             <div class="uk-width-medium-1-2">
                                <div class="parsley-row uk-margin-top">
                                    <div class="md-input-wrapper"><label for="val_birth">Date de naissance<span class="req">*</span></label><input type="text" name="date_naiss" id="val_birth" required="" class="md-input" data-parsley-americandate="" data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" data-parsley-id="8"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="email">Email<span class="req">*</span></label><input type="email" name="mail" data-parsley-trigger="change" required="" class="md-input" data-parsley-id="6"><span class="md-input-bar"></span></div>
                                    
                                </div>
                            </div>

                            <div class="uk-width-medium-1-2">
                                <div class="parsley-row">
                                    <div class="md-input-wrapper"><label for="fullname">TELEPHONE<span class="req">*</span></label><input type="text" name="tel" required="" class="md-input" data-parsley-id="4"><span class="md-input-bar"></span></div>    
                                </div>
                            </div>


                            <div id="file_upload-drop" class="uk-file-upload">
                                <p class="uk-text">Déposer le fichier</p>
                                <p class="uk-text-muted uk-text-small uk-margin-small-bottom">ou</p>
                                <a class="uk-form-file md-btn">Choisir le fichier<input name="photo" id="file_upload-select" type="file"></a>
                            </div>

                            <!--
                            <div class="uk-width-1-1">
                            <div class="uk-form-file md-btn md-btn-primary">
                                PHOTO
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" name="photo" type="file"></div>.
                        </div>
                        </div>
                       -->
                       
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <input type="submit" class="md-btn md-btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
 </div>